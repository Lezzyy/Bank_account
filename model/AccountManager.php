<?php

class AccountManager{
  private $db; // Instance de PDO.


    public function __construct($db)
    {
        $this->setDb($db);
    }
// request to show all the accounts

public function getAllAccounts(){

  $response=$this->db->query('SELECT * FROM accountData');
  $accounts=$response->fetchAll(PDO::FETCH_ASSOC);
  foreach ($accounts as $key => $value) {
    $accounts[$key]= new Account($value);
  }
  return $accounts;
}


public function getDb()
  {
      return $this->db;
  }

  /**
   * @param mixed $db
   */
  public function setDb($db)
  {
      $this->db = $db;
  }
}

 ?>

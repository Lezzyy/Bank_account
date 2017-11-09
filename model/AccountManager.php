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

//request to see just one account

public function getAccount($id){
  $response=$this->db->prepare('SELECT * FROM accountData WHERE id=:id');
  $response->execute(array(
    ':id'=>$id
  ));
  $account=$response->fetch(PDO::FETCH_ASSOC);
  $account= new Account($account);
  return $account;
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

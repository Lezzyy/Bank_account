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

// request to add an account

public function addAccount($account){
  $response=$this->db->prepare('INSERT INTO accountData(number, account, name, amount) VALUES(:number, :account, :name, :amount)');
  $response->bindValue(':number', $account->getNumber());
  $response->bindValue(':account', $account->getAccount(), PDO::PARAM_STR);
  $response->bindValue(':name', $account->getName(), PDO::PARAM_STR);
  $response->bindValue(':amount', $account->getAmount());
  $response->execute();
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

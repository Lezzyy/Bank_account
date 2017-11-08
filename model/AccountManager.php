<?php

class AccountManager{
  public function getDb(){
  $db = new PDO('mysql:host=localhost;dbname=bankAccount;charset=utf8', 'root', 'gj7b!17LA');
  return $db;
}



}

 ?>

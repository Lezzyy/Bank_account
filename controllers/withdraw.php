<?php
require('../model/Connexion.php');
require('../model/AccountManager.php');
require('../entities/Account.php');

$manager = new AccountManager($bdd);


if(isset($_GET['id'])){
  $account = $manager->getAccount($_GET['id']);
  require('../views/withdrawView.php');
}else{
  echo 'no slection';
}


if(isset($_POST) && count($_POST)>0){
$newAmount = new Account($_POST);
$manager->updateAmount($newAmount);
header('Location: index.php');
}


// require('../views/withdrawView.php');

 ?>

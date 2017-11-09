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



// require('../views/withdrawView.php');

 ?>

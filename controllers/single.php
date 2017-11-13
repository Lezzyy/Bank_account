<?php

require('../model/Connexion.php');
require('../model/AccountManager.php');
require('../entities/Account.php');


$manager = new AccountManager($bdd);


if(isset($_GET['id'])){
// we show the account selected
  $account = $manager->getAccount($_GET['id']);
  require('../views/singleView.php');
}else{
// if not error message
  echo 'no slection';
}


 ?>

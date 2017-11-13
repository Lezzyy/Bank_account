<?php

require('../model/Connexion.php');
require('../model/AccountManager.php');
require('../entities/Account.php');


$manager = new AccountManager($bdd);
// we show all the user accounts
if(isset($_GET['number'])){
  $accounts = $manager->getUserAccounts($_GET['number']);
  include('../views/transferView.php');
}

// if(isset($_POST['account'] && isset($_POST['transferAccount']))){
//
// }
// if(isset($_GET['number'])){
//   $accounts = $manager->getUserAccounts($_GET['number']);
//   var_dump($accounts);
//   require('../views/transferView.php');
// }

 ?>

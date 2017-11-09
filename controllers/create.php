<?php
require('../model/Connexion.php');
require('../model/AccountManager.php');
require('../entities/Account.php');

$manager = new AccountManager($bdd);

if(isset($_POST['number']) && isset($_POST['account']) && isset($_POST['name']) && isset($_POST['amount'])){
  $newAccount = new Account($_POST);
  $manager->addAccount($newAccount);
  header('Location: index.php');
}



require('../views/createView.php');


 ?>

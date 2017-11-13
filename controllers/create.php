<?php
require('../model/Connexion.php');
require('../model/AccountManager.php');
require('../entities/Account.php');

$manager = new AccountManager($bdd);

// if all the $_POST are set
if(isset($_POST['number']) && isset($_POST['account']) && isset($_POST['name']) && isset($_POST['amount'])){
// we create a new object with the values enter in the inputs
  $newAccount = new Account($_POST);
// && we add a new account in db and show 
  $manager->addAccount($newAccount);
  header('Location: index.php');
}



require('../views/createView.php');


 ?>

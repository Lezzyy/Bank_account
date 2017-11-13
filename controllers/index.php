<?php

require('../model/Connexion.php');
require('../model/AccountManager.php');
require('../entities/Account.php');

$manager=new AccountManager($bdd);

// we use the request to see all the accounts
$accounts = $manager->getAllAccounts();


require '../views/indexView.php';
 ?>

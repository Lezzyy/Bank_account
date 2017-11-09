<?php

require('../model/Connexion.php');
require('../model/AccountManager.php');
require('../entities/Account.php');

$manager=new AccountManager($bdd);
$accounts = $manager->getAllAccounts();


require '../views/indexView.php';
 ?>

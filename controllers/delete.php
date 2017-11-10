<?php
require('../model/Connexion.php');
require('../model/AccountManager.php');
require('../entities/Account.php');

$manager = new AccountManager($bdd);

// delete an account

$account = $manager->deleteAccount($_GET['id']);
header('Location: index.php');

 ?>

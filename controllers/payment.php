<?php

require('../model/Connexion.php');
require('../model/AccountManager.php');
require('../entities/Account.php');

$manager = new AccountManager($bdd);

if (isset($_GET['id'])) {
    $account = $manager->getAccount($_GET['id']);
    require('../views/paymentView.php');
}
// else{
//   echo 'no slection';
// }


if (isset($_POST['amount']) && count($_POST['amount'])>0) {
    $account = $manager->getAccount($_POST['id']);
    $newAmount=$account->getAmount();

    if ($_POST['amount'] > 0) {
        $account -> paymentAmount($_POST['amount']);
        $manager ->updateAmount($account);
        header('Location: index.php');
    } else {
        echo "enter a correct value";
    }
}

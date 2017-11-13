<?php

require('../model/Connexion.php');
require('../model/AccountManager.php');
require('../entities/Account.php');

$manager = new AccountManager($bdd);

if (isset($_GET['id'])) {
// we show the account selected
    $account = $manager->getAccount($_GET['id']);
    require('../views/paymentView.php');
}
// else{
//   echo 'no slection';
// }

// we check if the input if isset
if (isset($_POST['amount']) && count($_POST['amount'])>0) {

    $account = $manager->getAccount($_POST['id']);
    // we get the amount of the account selected
    $account->getAmount();

// if the amount enter is bigger than 0
    if ($_POST['amount'] > 0) {
// we add the amount enter to the amount register in db
        $account -> paymentAmount($_POST['amount']);
// && we update the db with the new amount
        $manager ->updateAmount($account);
        header('Location: index.php');
    } else {
// if not error message
        echo "enter a correct value";
    }
}

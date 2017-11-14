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


if (isset($_POST['Amount']) && $_POST['Amount']>0){
    // we get the first account selected
    $account = $manager->getAccount($_POST['account']);
    // we get the initial amount
    $accountFrom = $account->getAmount();

    // we get the second account selected
    $secondAccount = $manager->getAccount($_POST['transferAccount']);
    // we get the amount
    $accountTo = $secondAccount->getAmount();

// if the amount enter is superior or equal of the first amount
 if($_POST['Amount']<= $accountFrom){
      // we add the amount enter on the second account
       $secondAccount->paymentAmount($_POST['Amount']);
      //  we take off the amount enter on the first account
       $account -> withdrawAmount($_POST['Amount']);

      //  we update the second account with the new amount
       $manager-> updateAmount($secondAccount);
       //  we update the first account with the new amount
       $manager -> updateAmount($account);
         header('Location: index.php');
 } else {
  echo 'enter a correct value';
}
}


 ?>

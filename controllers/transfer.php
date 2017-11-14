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

//
// if(isset($_POST['account'])){
//   // we get and show the account selected
//   $account = $manager->getAccount($_POST['id']);
//   // we get the initial amount
//   $accountFrom = $account->getAmount();
//   var_dump($account);
//   include('../views/transferView.php');
//  if (isset($_POST['transferAccount'])){
//   $secondAccount = $manager->getAccount($_POST['id']);
//   $accountTo = $secondAccount->getAmount();
//  if (isset($_POST['Amount'])){
//   if ($_POST['Amount']<=$accountFrom){
//     $secondAccount->paymentAmount($_POST['amount']);
//     $account -> withdrawAmount($_POST['amount']);
//
//     $manager-> updateAmount($secondAccount);
//     $manager -> updateAmount($account);
//
//     // include('../views/indexView.php');
//   }else {
//     echo "enter a correct value";
//   }
//   }
//   }
// }

// if(isset($_GET['number'])){
//   $accounts = $manager->getUserAccounts($_GET['number']);
//   var_dump($accounts);
//   require('../views/transferView.php');
// }

 ?>

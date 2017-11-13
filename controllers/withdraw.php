<?php
require('../model/Connexion.php');
require('../model/AccountManager.php');
require('../entities/Account.php');

$manager = new AccountManager($bdd);


if(isset($_GET['id'])){
  // we get && we show the account selected
  $account = $manager->getAccount($_GET['id']);
  require('../views/withdrawView.php');
}
// else{
//   echo 'no slection';
// }

// we check the input if it is set and with a value enter
if(isset($_POST['amount']) && count($_POST['amount'])>0){
// we get and show the account selected
$account = $manager->getAccount($_POST['id']);
// we get the initial amount
$newAmount=$account->getAmount();

// if the value enter into the input is smaller or equal of the intial amount
if($_POST['amount'] <= $newAmount){
  // $newAmount -= $_POST['amount'];
  // $account->setAmount($newAmount);
  // $manager ->updateAmount($account);

  // we soustract the intial amount with the value enter in the input
  $account -> withdrawAmount($_POST['amount']);
  // && we update the db and show the new amount
  $manager ->updateAmount($account);
  header('Location: index.php');
}
// if not error message
else {
  echo "enter a correct value";
}
  }

 ?>

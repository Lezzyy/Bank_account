<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=bankAccount;charset=utf8', 'root', 'gj7b!17LA');
}

catch (Exception $e)

{

    die('Erreur : ' . $e->getMessage());

}



 ?>

<?php

class Account{
  protected $id;
  protected $number;
  protected $account;
  protected $name;
  protected $amount;
  public function __construct($donnees)
  {
      $this->hydrate($donnees);
  }

  /**
   * Fill the object with data
   * @param array $donnees
   */
  public function hydrate(array $donnees)
  {
      foreach ($donnees as $key => $value)
      {
          // On récupère le nom du setter correspondant à l'attribut.
          $method = 'set'.ucfirst($key);
          // Si le setter correspondant existe.
          if (method_exists($this, $method))
          {
              // On appelle le setter.
              $this->$method($value);
          }
      }
  }
// getters
public function getId(){
  return $this->id;
}

public function getNumber(){
  return $this->number;
}

public function getAccount(){
  return $this->account;
}

public function getName(){
  return $this->name;
}

public function getAmount(){
  return $this->amount;
}

// setters

public function setId(int $id){
$this->id=$id;
}

public function setNumber(int $number){
  $this->number=$number;
}

public function setAccount($account){
  $this->account=$account;
}

public function setName($name){
  $this->name=$name;
}

public function setAmount(int $amount){
  $this->amount=$amount;
}
}

 ?>

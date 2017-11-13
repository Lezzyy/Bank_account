<?php

// we create an account object

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
          // we get setter's name which correspond to the attribut
          $method = 'set'.ucfirst($key);
          // if the setter exist
          if (method_exists($this, $method))
          {
              // we call the setter.
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

public function withdrawAmount(int $amount){
  $this->amount -= $amount;
}

public function paymentAmount(int $amount){
  $this->amount += $amount;
}
}

 ?>

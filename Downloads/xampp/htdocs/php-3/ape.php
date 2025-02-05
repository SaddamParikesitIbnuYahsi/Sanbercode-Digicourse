<?php
class Ape {
  public $name;
  public $legs;
  public $cold_blooded;
  public $yell;

  
  public function __construct($name) {
      $this->name = $name; 
      $this->legs = 2;     
      $this->cold_blooded = "no"; 
      $this->yell = "Auooo";
  }
}

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>
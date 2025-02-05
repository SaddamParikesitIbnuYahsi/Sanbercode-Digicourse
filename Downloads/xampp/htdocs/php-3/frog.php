<?php
class Frog {
  public $name;
  public $legs;
  public $cold_blooded;
  public $jump;

  
  public function __construct($name) {
      $this->name = $name; 
      $this->legs = 4;     
      $this->cold_blooded = "no"; 
      $this->jump = "Hop Hop";
  }
}

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>
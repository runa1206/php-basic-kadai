<?php
class Food {
  public $name;

  private $price;

  public function set_name(string $price) {
    $this->name = $price;
  }
  public function show_price() {
    echo $this->name . '<br>';
  }
$food = ('potato', '250');
}
$price = new Food();
$price->set_name('250');
$price->show_price();

class Animal {
  public $name;

  private $height;
   
  public function set_name(string $height) {
    $this->name = $height
  }
  public function show_height() {
    echo $this->name . '<br>';
  }

  public $weight;
}
$height = new Animal();
$height->set_name('60');
$height->show_height();
$animal = ('dog', '60', '5000');

print_r($food);
pirnt_r($animal);




?>
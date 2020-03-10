<?php
class car{
public $car_id;
public $driving_license;
public function __construct($id,$license){
  $this->card_id=$id;
  $this->driving_license=$license;
  echo 'your car have Car_Id Is : ['.$id.'] And Have Driving_License Is: ['.$license.']<br>';

}
public function saywelcome(){
  echo "welcome to your car<br>";
  return $this;
}
public function turnOn(){
  echo "your car is turned on we are hope good for you";
  return $this;
}

}
$pero= new car("241301","324656");
$pero->saywelcome() ->turnOn();//this achaining method
echo "<pre>";
print_r($pero);







 ?>

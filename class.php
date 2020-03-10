<?php
class iphone{
   public $memory;
   public $screen;
   public $camera;
   public $ram;
   public function name($name){
     if (strlen($name)>5){
       echo "the name of iphone more than 5 str";
     }else {
       echo "the name of iphone is less than 5 str";
     }

   }

}
$iphone6=new iphone();
$iphone6->memory='32GB';
$iphone6->screan='6Inch';
$iphone6->camera='8mb';
$iphone6->ram='4GB';
$iphone6->name('iphone6');
echo "<pre>";
print_r($iphone6);
echo "</pre>";
echo "<pre>";
var_dump($iphone6);

$iphone7=new iphone();
$iphone7->name='iphone7';
$iphone7->memory='128Gb';
$iphone7->cam='24mp';
$iphone6->ram='3GB';
echo " <pre>";
print_r($iphone7);;

 ?>

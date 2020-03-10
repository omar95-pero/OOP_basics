<?php
class omar{
  public  $name;
  public  $age;
  public function __call($pero,$vale){//$vale is array
echo  'Is The Best Programmer['.print_r($vale).']';

  }
}
$ali = new omar();
$ali->pero("omar","osama","ahmed");
echo "<pre>";
print_r($ali)







 ?>

<?php
/**
 * __clone
 */
class car
{
  public $model;
  public $velocity;
  function __construct($mod,$vel)
  {
    $this->model=$mod;
    $this->velocity=$vel;
  }
}
$mazda=new car('mazda2015','100km/h');
$toyota=clone $mazda;
$toyota->model='toyota 2010';
$toyota->velocity='120km/h';
echo "<pre>";
print_r($mazda);
echo "<pre>";
print_r($toyota);






 ?>

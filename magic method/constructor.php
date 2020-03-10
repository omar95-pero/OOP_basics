<?php
/**
 * example for __construct
 */
class omar
{
public $name;
public $fuclty;
public $age;
private $id_card;
  function __construct($na,$fuc,$ag,$id)
  {
    $this->name=$na;
    $this->fuclty=$fuc;
    $this->age=$ag;
    $this->id_card=sha1($id);
    echo "My Name Is : ".$na." And My Fuclty Is: ".$fuc." And My Age Is:  ".$ag." And My ID_Num Is : ".sha1($id);
  }
}
$omar_data=new omar("Omar","Science","25YEARS","29509071700771");
echo "<pre>";
print_r($omar_data);
echo "</pre>";






 ?>

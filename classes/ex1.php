<?php
namespace omar;
class omar{
  public $name;
  public $email;
  private $password;
  public function data($name,$email,$password){
$this-> name='omar';
$this-> email='omarpero@.com';
$this-> password=sha1('omarpero12345');

  }
}
$pero=new omar();
$pero->data($name , $email , $password);
echo "<pre>";
print_r($pero);








 ?>

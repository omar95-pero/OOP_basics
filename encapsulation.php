<?php
class contact{
public $username;
private $password;
public function cont($user,$pass){
$this->username=$user;
$this->password=sha1($pass);
   }
}
$connect=new contact();
$connect->cont("omar","omarpero12345");
echo "<pre>";
print_r($connect);




 ?>

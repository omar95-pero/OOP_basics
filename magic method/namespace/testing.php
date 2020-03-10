<?php
require 'apple.php';
require 'sony.php';
require 'samsung.php';
$mob=new apple\createphone();
$mob->sayhello();
echo "<pre>";
print_r($mob);



 ?>

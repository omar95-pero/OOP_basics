<?php

spl_autoload_register(function ($class) {require 'classes/' . $class . '.class.php';});
$var = new omar();
print_r( $var);




 ?>

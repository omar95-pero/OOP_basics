<?php
class phone{
public $name;
public $ram;
//__get function
/*public function __get($cam,){//لكي تظهر عنددي الجملة لابد وان اطلب طباعة المتغير اسفل الاوبجكت
 echo' This Property Is Not Found:['.$cammera.']';
}*/
//set function
public function __set($method,$value)//هذه الدالة تقومم بارجاع المتغير وقيمته اذا كان غير موجود داخل الكلاس وتستخدم ايضا في حالة اذا كان المتغير من النوع البريفيت 
{
echo 'THis Method ['.$method.'] Is Not Found<br>';
echo 'And This Value['.$value.'] Is Not Found<br>';
}

}
$iphone=new phone();
$iphone->camera='24Mp';
$iphone->memory='32GB';
echo "<pre>";
print_r($iphone);
echo "<pre>";
$sony=new phone();
echo "<pre>";
print_r($sony);



 ?>

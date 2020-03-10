<?php
trait feature1{
  public function omar()
  {
  echo "Iam Very Happy To Meet You<br>";
  }
}
trait feature2
{
  public function omar()
  {
echo "How Are You And Your Family<br>";
  }
}

class pero
{
  use feature1 , feature2{feature2::omar insteadof feature1;}//its called priority because two have the same name of method
  function friend()
  {
  echo "omar pero meet his friend by luck<br>";
  }
}
$omar=new pero();
$omar->omar();
$omar->friend();
echo "<pre>";
print_r($omar);







 ?>

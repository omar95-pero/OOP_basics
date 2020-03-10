<?php
trait feature1{
  public function fingerprint()
  {
  echo "ur phone has finger_print feature<br>";
  }
}
trait feature2{
  public function touch3d()
  {
  echo "ur phone has thre dimensional touch feature<br>";
  }
}
trait feature3{
  public function FaceDetect()
  {
echo "ur phone has face recogination feature<br>";
  }
}
/**
 * trait(all features)
 */
trait AllFeatures
{
  use feature1,feature2,feature3;
}

class iphone{
  public $name;
  public $price;
  use AllFeatures;
  public function __construct($n,$pr)
  {
  $this->name=$n;
  $this->price=$pr;
  }
}
class sonny{
use feature1;
}

$mobil= new iphone("iphonex","900$");
// when request the trait must request the method which the trait contain it
$mobil->fingerprint();
$mobil-> touch3d();
$mobil->FaceDetect();
echo "<pre>";
print_r($mobil);

?>

<?php
class iphone//final calss when i won't like to inherite the class
     {   public $memory;
         public $screen;
         public $camera;
         public $ram;
         private $serial;
         public function mobile($mem,$scr,$cam,$rm,$ser)
         {
            $this->memory=$mem;
            $this->screen=$scr;
            $this->camera=$cam;
            $this->ram=$rm;
            $this->serial=sha1($ser);
          }
        }



/**
 * inheritance
 */
class sony extends iphone
      {
        public $battery="4000MA";
      }




$iphone6=new iphone();
          $iphone6->mobile("32Gb","5.5Inch","16MP","4GB","12345abcd");
          echo "<pre>";
          print_r($iphone6);
$sonyz=new sony();
          $sonyz->mobile("64Gb","65Inch","24MP","6GB","12345@#abcd");
          echo "<pre>";
          print_r($sonyz);






 ?>

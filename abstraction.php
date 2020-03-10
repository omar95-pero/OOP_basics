<?php
abstract class data{
public $name;
public $id_card;
public $num_phone;
private $bank_account;
abstract public function client_data($n,$id,$phon,$bank);
  }
  /**
   *  inherite class from data
   */
  class details extends data
  {
  public function client_data($n,$id,$phon,$bank){

    $this->name=$n;
    $this->id_card=$id;
    $this->num_phone=$phon;
    $this->bank_account=sha1($bank);
      }
    }
    $omar=new details();
    $omar->client_data("omar","295090717","012454","8ikj289");
    echo "<pre>";
    print_r($omar);




 ?>

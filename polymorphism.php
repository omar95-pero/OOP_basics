<?php
/**
 *
 */
interface DBconnects
{
public function getusers();
public function getArticles();
public function showstats();
}
/**
 * polymoorphism exercisec
 */
class MYSQL implements DBconnects
{
  public function getusers(){
    echo "SELECT * FROM Users";
  }
  public function getArticles(){
    echo "SELECT *FROM Articles";
  }
  public function showstats(){

    echo "SELECT *FROM Stats";
  }

  }
  class orcle implements DBconnects
  {
    public function getusers(){
      echo "HELLO FROM Users";
    }
    public function getArticles(){
      echo "HELLO FROM Articles";
    }
    public function showstats(){

    echo "HELLO FROM Stats";
    }


    }



$sql=new orcle();
$sql->getusers();
$sql->getArticles();
$sql->showstats();
echo "<pre>";
print_r($sql);

















 ?>

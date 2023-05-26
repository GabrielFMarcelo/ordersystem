<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ordersystem/resource/php/class/core/init.php';

class insert extends config{
  public $insert;

  public function __construct($insert){
    $this->insert = $insert;
  }

  public function insert(){
    $con = $this->con();
    $food;
    $name;
    $price;

    if (isset($_POST['c-salad'])) {
      $food = "Classic Caesar Salad";
      $name = "Hello";
      $price = "100";
    }

    $sql = "INSERT INTO `tbl_order`(`u_name`, `f_name`, `price`) VALUES ('$name', '$food', '$price')";
    $data = $con->prepare($sql);

    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}
 ?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ordersystem/resource/php/class/core/init.php';

class insert extends config{
  public $insert;

  public function __construct($insert){
    $this->insert = $insert;
  }

  public function insert(){
    $con = $this->con();
    $user = new User();
    $food;
    $price;
    $name = $user->data()->name;

    if (isset($_POST['c-salad'])) {
      $food = "Classic Caesar Salad";
      $price = "500";
    }elseif (isset($_POST['cap-salad'])) {
      $food = "Caprese Salad";
      $price = "500";
    }elseif (isset($_POST['l-potato'])) {
      $food = "Loaded Baked Potato";
      $price = "350";
    }elseif (isset($_POST['g-steak'])) {
      $food = "Grilled Ribeye Steak";
      $price = "1500";
    }elseif (isset($_POST['s-ribs'])) {
      $food = "Smoked BBQ Ribs";
      $price = "1200";
    }elseif (isset($_POST['f-ribs'])) {
      $food = "Filet Mignon and Baby Back Ribs Combo";
      $price = "2500";
    }elseif (isset($_POST['fries'])) {
      $food = "Freshly Cooked Potato Fries";
      $price = "350";
    }elseif (isset($_POST['soup'])) {
      $food = "Pumpkin Soup";
      $price = "500";
    }elseif (isset($_POST['starters'])) {
      $food = "Texas Starters";
      $price = "1200";
    }

    // ayaw mag-insert kapag may "," yung mga prices
    $sql = "INSERT INTO `tbl_order`(`name`, `f_name`, `price`) VALUES ('$name', '$food', '$price')";
    $data = $con->prepare($sql);

    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}
 ?>

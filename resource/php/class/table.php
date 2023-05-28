<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ordersystem/resource/php/class/core/init.php';

class table extends config{
  public $table;

  public function __construct($table){
    $this->table = $table;
  }

  public function tableNum(){
    $user = new User();
    $con = $this->con();
    $tables = 0;
    $names = $user->data()->name;

    if (isset($_POST['checkout'])) {
      $tables = rand(1,20);
    }

    $sql = "INSERT INTO `tbl_tn`(`table`, `name`) VALUES ('$tables', '$names')";
    $data = $con->prepare($sql);

    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}
 ?>

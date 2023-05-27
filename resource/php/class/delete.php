<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ordersystem/resource/php/class/core/init.php';
class delete extends config{
public $id;

public function __construct($id){
  $this->id = $id;
}

public function deleteTask(){
  $con = $this->con();
  $sql = "DELETE FROM `tbl_order` WHERE `id`= $this->id";
  $data = $con->prepare($sql);
  // var_dump($data);
  // die();
  if($data->execute()){
    return true;
  }else{
    return false;
  }
}
}

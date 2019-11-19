<?php
include 'Database.php';
Class Delete extends Database{
  public $deleteSql;
  public $idy;
  public $del;

  public function deleteFunction()
  {
    $this->idy = $_GET['id'];
    $this->deleteSql = "Delete from users_info where id=$this->idy";
    $this->del = mysqli_query($this->link,$this->deleteSql);
    if($this->del){
      echo "Data Deleted!";

      header('location:..\index.php');
      return $this->del;
    }else{
      echo "Error!";
      return false;
    }
  }

}

$delObj = new Delete;
$delObj->deleteFunction();

 ?>

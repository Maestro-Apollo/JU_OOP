<?php
include 'Database.php';
Class updatePage extends Database{
  private $id;
  private $sql;

  public function updateRow()
  {
    $this->id = $_GET['id'];
    $this->sql = "Select * from users_info where id=$this->id";
    $row = mysqli_query($this->link,$this->sql);
    return $row;
  }
}

$result = new updatePage;
$show = $result->updateRow();

$show2 = mysqli_fetch_assoc($show);


 ?>

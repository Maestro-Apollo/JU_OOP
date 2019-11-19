<?php

Class Update extends Database{
private $id;
private $sql;
private $newUser;
private $newPassword;
private $upsql;

public function updateFunction()
{
  if(isset($_POST['update'])){
    $this->id = $_GET['id'];
    $this->newUser = $_POST['username2'];
    $this->newPassword = $_POST['password2'];

    $this->sql = "Update users_info set username = '$this->newUser',password = '$this->newPassword' where id = $this->id";
    $this->upsql = mysqli_query($this->link,$this->sql);
    if($this->upsql){
      header('location:index.php');
      return $this->upsql;
    }
    else{
      echo "Not Updated!";
      return false;
    }
  }
}

}

$upObj = new Update;
$upObj->updateFunction();



 ?>

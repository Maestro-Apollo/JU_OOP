<?php

include 'Database.php';

Class Login extends Database{
  private $logSql;
  private $logUser;
  private $logPass;
  private $match;
  private $fet;

  public function LoginFunction()
  {
    if(isset($_POST['log'])){
      $this->logUser = $_POST['username3'];
      $this->logPass = $_POST['password3'];
      $this->logSql = "Select username,password from users_info where username like '$this->logUser' and password like '$this->logPass' ";
      $this->match = mysqli_query($this->link,$this->logSql);
      $this->fet=mysqli_fetch_assoc($this->match);
      if($this->fet){
        header('location:Event.php');
      }else{
        echo "Not Register!";

      }
    }
  }

}

$LogObj = new Login;
$LogObj->LoginFunction();


 ?>

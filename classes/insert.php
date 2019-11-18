<?php




class Insert extends Database{


private $insert_result;
private $insert_query;



public function insertFunction()
{
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];


    if($username == "" || $password == "" || $gender == ""){
      echo "Field shouldn't be empty";
    }
    else{
      $insert_query = "Insert into users_info(username,password,gender) values('$username','$password','$gender')";

      if(mysqli_query($this->link,$insert_query)){
        header('location:index.php');
        echo "Data Added!";

      }else{
        echo "Data not Added";
      }
    }

}



}







}

$insertObj = new Insert;
$insertObj->insertFunction();


 ?>

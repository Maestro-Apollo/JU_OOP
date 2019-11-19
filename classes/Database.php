<?php




class Database{
  private $server = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "php_oop";

  protected $read = "Select * from users_info";

  protected $link;
  protected $error;


public function __construct(){
  $this->create();
}
public function create()
{
  $this->link = mysqli_connect($this->server,$this->username,$this->password,$this->dbname);
  if(!$this->link){
    echo "Not Connected";
    $this->error = $this->link->connect_error;
  }
}

}
$obj = new Database;


 ?>

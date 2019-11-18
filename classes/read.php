<?php

include 'Database.php';


Class Read extends Database{

  private $result;



  public function readFunction()
  {
    $this->result = $this->link->query($this->read) or die($this->link->error.__LINE__);
    if($this->result->num_rows > 0){
      return $this->result;
    }
    else {
      return false;
    }
  }

}

$readData = new Read;
$data = $readData->readFunction();


 ?>

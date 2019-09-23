<?php
require_once("connection.php");

if(count($_GET)>0) {
  $sql = "DELETE FROM emp WHERE id=" . $_GET["id"] . "";
  if(mysqli_query($conn,$sql))
  {
  	header("Location:emp.php");
  }

  else{
  	echo "Data not deleted";
  }
  //$message = "Employee Details Successfully Deleted.";
}

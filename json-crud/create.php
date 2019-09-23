<?php
include("connection.php");

$Name = $_POST['name'];
$DOB = $_POST ['dob'];
$Gender = $_POST ['gender'];
$Department = $_POST ['deptar'];
$Hiring =$_POST ['hiring_date'];
$salary =$_POST ['salary'];
echo $QUERY;
$QUERY = mysqli_query($conn,"INSERT INTO `emp`(`name`,`dob`,`gender`,`department`,`hiring_Date`,`salary`) 
VALUES ('$Name','$DOB','$Gender','$Department','$Hiring','$salary')");
	echo $QUERY;
if($QUERY == TRUE)
{
		echo $QUERY;
	echo "done";
}
else
{ 
	echo $QUERY;
	echo"not done";
	
}
	
?>

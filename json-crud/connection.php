<?php  

  /*$conn = mysqli_connect('localhost','root','root','employee'); */
  
      $servername = "localhost";  
       $username = "root";  
       $password = "root";
       $dbname = "employee";
         $conn = mysqli_connect($servername,$username,$password,$dbname); 
         
     
       if($conn)
       {
		   echo "";
	   }
	   else{
echo "no";	   }
?>  

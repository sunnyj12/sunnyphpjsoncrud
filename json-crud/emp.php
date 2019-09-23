
<?php
$getfile = file_get_contents('people.json');
$jsonfile = json_decode($getfile);
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>Tutorial CRUD  JSON DATA</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
</head>
<body>
	<?php
	 
	include("header.php");
	 
	?>
	
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.php">
   JSON CRUD</a>
  </div>
  <div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-left">
    <li class="clr1 active"><a href="index.php">Home</a></li>
    
     <li class="clr1 active"><a href="emp.php">Employee</a></li>
   </ul>
  </div>
 </div>
</nav>
</br></br></br></br>
<div class="container">
 <div class="jumbotron">
  <h3>Welcome to Employee Page</h3>      
  <p>All Employee List Show below</p>      
 </div>
</div>
<div class="container">
 <div class="btn-toolbar"> 
  <a class="btn btn-primary" href="employee.php"><i class="icon-plus"></i> Add New Employee</a>
  <div class="btn-group"> </div>
  
 </div>
</div>

<br>
<br>

<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM emp");
?>
<div class="container">
 <div class ="row">
  <div class="col-md-9">
	  <?php
if (mysqli_num_rows($result) > 0) {
?>
   <table class="table table-striped table-bordered table-hover">
   <tr>
     <th>Name</th>
     <th>DOB</th>
     <th>Gender</th>
     <th>Department</th>
     <th>hiring_date</th>
     <th>salary</th>
     <th>Action</th>
    </tr>  
    <?php
       $i=0;
while($row = mysqli_fetch_array($result)) {
?>
	<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["department"]; ?></td>
    <td><?php echo $row["hiring_date"]; ?></td>
    <td><?php echo $row["salary"]; ?></td>
   
     <td>
      <a class="btn btn-xs btn-primary" href="eupdate.php?id=<?php echo $row['id']; ?>">Edit</a>
      <a class="btn btn-xs btn-danger" href="emp_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
     </td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>


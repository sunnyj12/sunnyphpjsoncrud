<?php
require_once("connection.php");
if(count($_POST)>0) {
	$sql = "UPDATE emp set name='" . $_POST["name"] . "', dob='" . $_POST["dob"] . "', gender='" . $_POST["gender"] . "',department='" . $_POST["department"] . "',hiring_date='" .$_POST["hiring_date"] ."', salary='" . $_POST["salary"] . "' WHERE id='" . $_POST["id"] . "'";
	mysqli_query($conn,$sql);
	header('Location:emp.php');
	$message = "Employee Details Successfully Updated.";
}
$select_query = "SELECT * FROM emp WHERE id='" . $_GET["id"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>

<html>
<head>
<title>Edit Employee Details</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
 <link rel="stylesheet" href="assets/css/ilmudetil.css">

 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head> 
<body> 
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
	<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update User</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?php echo $row['name']; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">dob</label>
          <input value="<?php echo $row['dob']; ?>" type="text" name="dob" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">gender</label>
          <input value="<?php echo $row['gender']; ?>" type="text" name="gender" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">department</label>
          <input value="<?php echo $row['department']; ?>" type="text" name="department" id="name" class="form-control">
        </div>
        
        
        <div class="form-group">
          <label for="name">hiring_date</label>
          <input value="<?php echo $row['hiring_date']; ?>" type="text" name="hiring_date" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">salary</label>
          <input value="<?php echo $row['salary']; ?>" type="text" name="salary" id="name" class="form-control">
        </div>
        
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>

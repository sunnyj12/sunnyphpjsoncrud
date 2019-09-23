<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="ilmu-detil.blogspot.com">
        <title>Tutorial CRUD JSON DATA</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>employee form</title>
        <link rel="stylesheet" href="assets/css/ilmudetil.css">
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

        <html>



        <body>

            <h2 class="text-center text-primary my-5">Employee Data</h2>
            <form action="create.php" method="post">
                <div class="container" style="width:50%  ">

                    <div class="form_group">
                        <label>Name:</label>
                        <input class="form-control" type="text" name="name" value="" required />
                    </div>
                    <div class="form_group">
                        <label>DOB:</label>
                        <input class="form-control" type="text" name="dob" value="" required/>
                    </div>
                    <div class="form_group">
                        <label>Gender:</label>
                        <input class="form-control" type="text" name="gender" value="" required/>
                    </div>
                    <div class="form_group">
                        <label>Department:</label>
                        <input class="form-control" type="text" name="deptar" value="" required/>
                    </div>
                    <div class="form_group">
                        <label>Hiring Date:</label>
                        <input class="form-control" type="text" name="hiring_date" value="" required/>
                    </div>

                    <div class="form_group">
                        <label>Salary:</label>
                        <input class="form-control" type="text" name="salary" value="" required/>

                    </div>
                    <div class="form_group">
                        <input class="form-control btn btn-success my-5" type="submit" name="Submit" value="Submit" />

                    </div>
                </div>
            </form>
        </body>

        </html>

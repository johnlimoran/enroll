<!DOCTYPE html> 
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <title>
        Add course
    </title>
    <link rel="stylesheet" type="text/css" href=style1.css >
    </head>
    <body>
           
    <?php   include('insertdata.php');
    ?>
    <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
    </div>
    
    <?php endif ?>  
    <img class="logo"src="images/logo.png" alt="Logo" style: >
       
    <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index.php">Manage Student</a>
    <a href="addcourse.php">Course</a>
    <a href="addsubject.php">Subject</a>
    <a href="#">Manage Course</a>
  </div>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>
<div class="row">
  <div class="col-md-6">
  <div class="container-fluid">
            <form method="post" action="insertdata.php" >
                <div>
                    
                <input class="form-control" type="hidden" name="" 
                    value="<?php echo $id; ?>">
                     <label>Course Name </label>
                     <input class="form-control" type="text" name="course"
                     value="<?php echo $course; ?>" ><br>
                   
                   
                  
                     <label> Number of years </label>
                     <input class="form-control" type="text" name="years"
                     value="<?php echo $years; ?>" 
                        ><br><br>
                        <button class="btn btn-light" type="submit" name="savecourse" >Save</button>
                </div>
            </form>
        </div>

  </div>
</div>
        
    </body>
</html>
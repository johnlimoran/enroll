<!DOCTYPE html> 
<html>
    <head>
    <title>
        Add subject
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <style>
body {
  font-family: 'Lato', sans-serif;
}

</style>
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
            <form method="post" action="insertdata.php">
            <input type="hidden" name="id"
                    ><div class="form-group">
                            <label>SUBJECT CODE</label> 
                            <input class="form-control formtextbox" type="text" name="subjectcode"
                            value="<?php echo $subjectcode; ?>"><br>  
                            
                    </div>
                   
                    <br>
                    <div class="form-group">
                            <label>SUBJECT UNIT</label>
                            <input class="form-control formtextbox" type="text" name="subjectunit"
                            value="<?php echo $subjectunit;?>"><br>
                            
                    </div>
                    
                    <button class="btn btn-light" type="submit" name="savesub">SAVE</button>
            </form>
               
            </div>
        </div>


    </div>
    
    


    </body>
</html>
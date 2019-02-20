<!DOCTYPE html> 
<?php   include('insertdata.php');
       


 $rec1 =mysqli_query($conn,"SELECT * from mystats where id= 0");
//fetch the record to be updated
if (isset($_GET['edit'])){
$id = $_GET['edit'];

$edit_state= true;
$rec =mysqli_query($conn,"SELECT * from mystudents where id= $id");

if (count($rec) == 1 ) {
    $record = mysqli_fetch_array($rec);
    $firstname = $record['firstname'];
    $lastname= $record['lastname'];
    $comaddress= $record['comaddress'];
    
    $id= $record['id'];
}
}
if (isset($_GET['id'])){
    $id = $_GET['id'];
    
    $edit_state= true;
    $rec1 =mysqli_query($conn,"SELECT * from mystats where id= $id");
    
      
    }
    


?>
      
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
    <style>
body {
  font-family: 'Lato', sans-serif;
}

</style>
<title>
    SCHOOL
</title>
</head>
<body>
     <img class="logo"src="images/logo.png" alt="Logo"  >
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

        <br>   <br> <br> 
        <div class="row">
        <div class="col-md-6">
        <div class="container-fluid">
            
              <form method="post"  action="insertdata.php">
              <input class="form-control formtextbox" type="hidden" name="id" 
              value="<?php echo $id; ?>">
              <div class="form-group">
              <label>Firstname</label>
              <input class="form-control formtextbox" type="text" name="firstname"
              value="<?php echo $firstname;?>" >
              </div>
              <div class="form-group">
              <label>Lastname</label>
              <input class="form-control formtextbox" type="text" name="lastname"
              value="<?php echo $lastname;?>" >
              </div>
              <div class="form-group">
              <label>Address</label>
              <input class="form-control formtextbox" type="text" name="comaddress"
              value="<?php echo $comaddress;?>" >
              </div>
              <div class="form-group"> 
                    <?php if ($edit_state == true): ?>
                    <button class="btn btn-light" type="submit" name="update" >update</button>
                    <?php else: ?>
                    <button class="btn btn-light" type="submit" name="save" >Save</button>
                    <?php endif ?>
                <!--fomr-group -->    
              </div>
              
            </form>
                
               
    <!--container fluid -->
    </div>
    <!-- col-md-6-->
        </div>
        <div class="col-md-6">
        <table class="table table-striped">
                        <thead class="thead">
                        <tr>
                        <th><label>Firstname</label>
                        </th>  
                        <th><label>Lastname</label>
                        </th>  
                        <th><label>Address</label>
                        </th>  
                        <th>
                        </th>
                        <th>
                        </th>  
                        </tr>
                        </thead>
                       <?php
                       while($row = mysqli_fetch_array($results)){ ?>
                       <tr>
                           <td><?php echo " ". $row["firstname"]. "</br> "; ?></td>
                           <td style="width: 110px;"><?php echo " ". $row["lastname"]. "</br> ";?></td>
                           <td><?php echo " " . $row["comaddress"]. "</br> ";?>
                           </td>
                           <td> <button class="btn btn-light" href="index.php?edit=<?php echo $row['id'];?>">Edit</button>
                           </td>
                           <td><button class="btn btn-light" href="insertdata.php?del=<?php echo $row['id'];?>">DELETE</button>
                           </td>
                    
                           </tr>
                       <?php } ?>
          </table>
         <!--col-md-6-->                
        </div>
        <!--row-->
        </div>
       
   
   
  

    
  
         

</body>

</html>
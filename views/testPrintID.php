
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('header.php');?>
    <title>Print I.D</title>
    <?php
    $conn = new mysqli('localhost', 'root', '', 'idtest');

      if(isset($_GET['printid'])){
      $id = $_GET['printid'];

        $sql = " SELECT * FROM person WHERE personID = $id";

        $result = mysqli_query($conn,$sql);

        $row = mysqli_fetch_array($result);

      $image = "../uploads/".$row['file'];
      }
    ?>  
  </head>

  <body>

    <div class="globaldiv">

       <?php include('testNavbar.php'); ?>


          <div style="margin-top:0px; border: 0px solid white">
           <center>
           <h1 style="color:white">Check I.D Details</h1>            
      
            
            <input readonly style="width:300px;" type="hidden" name="personID" value="<?php echo $row['personID']?>">
            <div>
            <input readonly class="inputDet" type="text" placeholder="First Name" value="Firstname: <?php echo $row['firstName'] ?>"> 
            </div>
            <div>
            <input readonly type="text" name="MiddleName" placeholder="Middle Name" class="inputDet" value="MiddleName: <?php echo $row['middleName'] ?>">
            </div>
            <div>
            <input readonly type="text" name="LastName" placeholder="Last Name" class="inputDet" value="LastName: <?php echo $row['lastName'] ?>">
            </div>
            <div>
            <input readonly type="text" name="NameSuffix" placeholder="Name Suffix: (Optional)" class="inputDet" value="Name Suffix: <?php if($row['nameSuffix']) {echo $row['nameSuffix'];} else{ echo "None";} ?>">
            </div>
            <div>
            <input readonly type="text" name="School" placeholder="School" class="inputDet" value="School: <?php echo $row['school'] ?>">
            </div>
            <div>
            <input readonly type="text" name="HomeAddress" placeholder="Home Address" class="inputDet" value="Home Address: <?php echo $row['address'] ?>">
            </div>
            <div>
            <input readonly type="text" name="Contact" placeholder="Contact" class="inputDet" value="Contact: <?php echo $row['contact'] ?>">
            </div>
            <div>
            <input readonly type="text" name="Designation" placeholder="Designation" class="inputDet" value="Designation: <?php echo $row['designation'] ?>">
            </div>
            

            <h3 style="color:white">Emergency Details</h3> 
            <div>
            <input readonly class="inputDet" type="text" placeholder="First Name" value="Firstname: <?php echo $row['emFirstName'] ?>"> 
            </div>
            <div>
            <input readonly class="inputDet" type="text" placeholder="Middle Name" value="Middlename: <?php if($row['emMidName']) {echo $row['emMidName'];} else{ echo "None";} ?>"> 
            </div>
            <div>
            <input readonly class="inputDet" type="text" placeholder="First Name" value="Lastname: <?php echo $row['emLastName'] ?>"> 
            </div>
            <div>
            <input readonly class="inputDet" type="text" placeholder="First Name" value="Address: <?php echo $row['emAddress'] ?>"> 
            </div>
            <div>
            <input readonly class="inputDet" type="text" placeholder="First Name" value="Contact: <?php echo $row['emContact'] ?>"> 
            </div>


            <!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO00000000000OOOOOOOOOOO -->
            <?php
            echo "<a class='btn btn-lg btn-default' href='../test/index.php?printid={$row['personID']}'> <strong> Print Now </strong> </a>";
            ?>
            <button class="btn btn-lg btn-danger" onclick="location='testPersons.php';"> <strong> Cancel </strong> </button>
            </center>
            </div>
            </div>

              
            </div>
            </div>

       

   
    <?php include('footer.php');?>



  </body>
</html>

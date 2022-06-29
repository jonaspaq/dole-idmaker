
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('header.php');?>
    <title>Edit Details</title>   
  </head>
  <?php
    require ('../controllers/MyConnect.php');

    if(isset($_GET['id'])){

      $conn = myConnect();
      $ID = $_GET['id'];
      $sql = "SELECT * FROM person WHERE personID = $ID";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      $image = "../uploads/".$row['file'];
    }
  ?>

  <body>


    <div class="globaldiv">

     <?php include('testNavbar.php'); ?>

       

          <div style="margin-top:80px; margin-bottom: 70px;">

             <div style="border:1px solid white ; margin: 0 25% 20px; 25%; padding-bottom:5px; border-radius:8px; min-width: 400px; max-width: 700px;">
              <center>
               <h3 style="color:white">Change ID Picture</h3>
                <form method="POST" action="../controllers/IDcontroller.php" enctype="multipart/form-data">
               <div style="border: 1px solid; height:200px; width:200px;">
               <?php echo "<img src='$image' height='100%' width='100%'>" ; ?>
               </div>
               <input type="hidden" name="personID" value="<?php echo $row['personID'] ?>">
                <input type="file" id="editPicBox" name="file" class="fileInputEdit" style="color:white" required>
               <button type="submit" name="editPic" class="btn btn-success">Change Picture</button>
               <a href="testPersons.php" class="btn btn-danger"> Cancel </a>

                </form>
              </center>
             </div>

            <div style="border:1px solid white; margin: 0 25% 0 25%; padding-bottom:5px; border-radius:8px;  min-width: 400px; max-width: 700px;">
            <center><h1 style="color:white">Edit details for ID here</h1></center>
            
            <form method="POST" action="../controllers/IDcontroller.php" enctype="multipart/form-data">
            <center>
            <input type="hidden" name="personID" value="<?php echo $row['personID'] ?>">
            <div>
            <input maxlength="12" type="text" name="FirstName" placeholder="First Name" class="textInput" value="<?php echo $row['firstName'] ?>">
            </div>
            <div>
            <input maxlength="15" type="text" name="MiddleName" placeholder="Middle Name" class="textInput" value="<?php echo $row['middleName'] ?>">
            </div>
            <div>
            <input maxlength="12" type="text" name="LastName" placeholder="Last Name" class="textInput" value="<?php echo $row['lastName'] ?>">
            </div>
            <div>
            <input maxlength="10" type="text" name="NameSuffix" placeholder="Name Suffix: (Optional)" class="textInput" value="<?php echo $row['nameSuffix'] ?>">
            </div>
            <div>
            <input type="text" name="School" placeholder="School" class="textInput" value="<?php echo $row['school'] ?>">
            </div>
            <div>
            <input type="text" name="HomeAddress" placeholder="Home Address" class="textInput" value="<?php echo $row['address'] ?>">
            </div>
            <div>
            <input type="text" name="Contact" placeholder="Contact" class="textInput" value="<?php echo $row['contact'] ?>">
            </div>
            <div>
            <input type="text" name="Designation" placeholder="Designation" class="textInput" value="<?php echo $row['designation'] ?>">
            </div>

            <h2 style="color:white"> Edit Emergency Details </h2>
              <div>
              <input maxlength="13" type="text" name="emFirstName" placeholder="First Name" class="textInput" value="<?php echo $row['emFirstName'] ?>" required>
              <input maxlength="15" type="text" name="emMiddleName" placeholder="Middle Name" class="textInput" value="<?php echo $row['emMidName'] ?>" required>
              <input maxlength="13" type="text" name="emLastName" placeholder="Last Name" class="textInput" value="<?php echo $row['emLastName'] ?>" required>
              </div>
              <div>
              <input type="text" name="emAddress" placeholder="Address" class="textInput" value="<?php echo $row['emAddress'] ?>" required>
              </div>
              <div>
              <input type="text" name="emContact" placeholder="Contact Number" class="textInput" value="<?php echo $row['emContact'] ?>" required>
              </div>

            <button type="submit" name="editPerson" class="btn btn-primary">Submit New Details</button>
            <a href="testPersons.php" class="btn btn-danger"> Cancel </a>
            </center>

            </form>
          </div>
          </div>

              
            </div>
          </div>

        </div>

      </div>

    </div>
    <?php include('footer.php');?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('header.php');?>
    <title>Add New I.D</title> 
  </head>

  <body>

    <div class="globaldiv">

      
       <?php include('testNavbar.php'); ?>

            <div style="border:0px solid; margin-top:50px;">
            <center><h1 style="color:white">Submit details for ID here</h1></center>
            
            <form method="POST" action="../controllers/IDcontroller.php" enctype="multipart/form-data">
            
              <center>
              <div>
              <input maxlength="12" type="text" name="FirstName" placeholder="First Name" class="textInput" required>
              </div>
              <div>
              <input maxlength="15" type="text" name="MiddleName" placeholder="Middle Name" class="textInput">
              </div>
              <div>
              <input maxlength="12" type="text" name="LastName" placeholder="Last Name" class="textInput" required>
              </div>
              <div>
              <input maxlength="10" type="text" name="NameSuffix" placeholder="Name Suffix: (Optional)" class="textInput">
              </div>
              <div>
              <input type="text" name="School" placeholder="School" class="textInput" required>
              </div>
              <div>
              <input type="text" name="HomeAddress" placeholder="Home Address" class="textInput" required>
              </div>
              <div>
              <input type="text" name="Contact" placeholder="Contact Number" class="textInput" required>
              </div>
              <div>
              <input type="text" name="Designation" placeholder="Designation" class="textInput" require>    
              </div>

              <div>
              <h6 style="color:white"> Choose I.D Picture </h6>
              <input type="file" name="file" class="fileInput" style="color:white">
              </div>

              <h3 style="color:white"> Fill up emergency contact </h3>
              <div>
              <input maxlength="13" type="text" name="emFirstName" placeholder="First Name" class="textInput" require>
              </div>
              <div>
              <input maxlength="13" type="text" name="emMiddleName" placeholder="Middle Name" class="textInput">
              </div>
              <div>
              <input maxlength="13" type="text" name="emLastName" placeholder="Last Name" class="textInput" require>
              </div>
              <div>
              <input type="text" name="emAddress" placeholder="Address" class="textInput" require>
              </div>
              <div>
              <input type="text" name="emContact" placeholder="Contact Number" class="textInput" require>
              </div>

              <button type="submit" name="submitDetails" onclick="myFunction()" class="btn btn-primary">Submit Details</button>
              <a href="testPersons.php" class="btn btn-danger"> Cancel</a>
              </center>
            </form>
          </div>

          <div class="mastfoot">
            <div class="inner">
              
            </div>
          </div>
          </div>
        </div>

    <?php include('footer.php');?>
  </body>
</html>

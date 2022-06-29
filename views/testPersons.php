<!DOCTYPE html>
<?php
require('../controllers/IDcontroller.php');
$person = loadPersons();
?>
  <html>
  <head>
    <?php include('header.php');?>
    <title>List of I.D</title>   
  </head>

  


<body>

    <div class="globaldiv">

    <?php include('testNavbar.php'); ?>

        <center> <h3 style="color:white;">Persons Table <a href="testAdd.php" class="btn btn-success"> Add new Person</a></h3> </center>

      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="&#99999; Search for names.." style="padding:5px; border-radius:4px; margin: 0 0 20px 80px;"> <span class="glyphicon glyphicon-search" aria-hidden="true" style="color:white;"></span>

      <div style="border:0px solid red; margin-left:5%;margin-right:5%;margin-top:0%; height: 50em; overflow: auto; background-color: white; border-radius: 5px;">  
      
      <table class="table" id="personTable">
      
      <thead>
          <th>Person Name</th>
          <!-- <th>School</th>
          <th>Address</th>
          <th>Contact</th>
          -->
          <th>Picture / Image </th>
          <th>Actions </th>
                
      </thead>

      <tbody>
      <?php
        foreach($person as $row){       
          echo "<td style='left:0;''>".$row['firstName']."&nbsp".$row['middleName']."&nbsp".$row['lastName']."&nbsp".$row['nameSuffix']. "</td>";
          //echo "<td>".$row['school']."</td>";
          //echo "<td>".$row['address']."</td>";
          //echo "<td>".$row['contact']."</td>";
          $image = "../uploads/".$row['file'];
          echo "<td><img height='60px' width='60px' style='border-radius:10px' src=$image > </td>";

          echo "<td> <a class='btn btn-info' href='testPrintID.php?printid={$row['personID']}'> Print </a> 
                     <a class='btn btn-warning' href='testEdit.php?id={$row['personID']}'> Edit </a>  
                     <a class='btn btn-danger' href='../controllers/IDcontroller.php?deleteID={$row['personID']}'";?> onclick="return confirm('Are you sure you want to delete this person?')"><?php echo "Delete </a></td>";            
          echo "</tr>";
        }
      ?>


      </tbody>
      </table>
      </div>
  
      </center>
          



    <?php include('footer.php');?>
    </div>
  </body>
</html>

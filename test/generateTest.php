<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Ymd") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>



<?php
    $conn = new mysqli('localhost', 'root', '', 'idtest');

        $sql = " SELECT * FROM person WHERE personID = 8";

        $result = mysqli_query($conn,$sql);

        $row = mysqli_fetch_array($result);

      	$image = "../uploads/".$row['file'];

      	$fnA = $row['firstName'];
		$fnA1 = $fnA[0];
		$mnA = $row['middleName'];
		$mnA1 = $fnA[0];
		$lnA = $row['lastName'];
		$lnA1 = $fnA[0];

		echo $fnA1;      	
      
    ?>
</body>
</html>
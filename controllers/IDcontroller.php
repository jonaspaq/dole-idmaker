<?php
	include_once ('../controllers/MyConnect.php');
	
	if(isset($_POST['submitDetails'])){
		addID();
	}
	if(isset($_GET['deleteID'])){
		deletePerson();
	}
	if(isset($_POST['editPerson'])){
		editPerson();
	}
	if(isset($_POST['editPic'])){
		editPic();	
		
	}



function addID(){
	$conn = myConnect();

	$id = NULL;
	$firstName = $_POST['FirstName']; $middleName = $_POST['MiddleName'];
	$nameSuffix= $_POST['NameSuffix'];
	$lastName = $_POST['LastName']; $school = $_POST['School'];
	$address = $_POST['HomeAddress']; $contact = $_POST['Contact'];
	$designation = $_POST['Designation'];

	$emFirstName = $_POST['emFirstName']; $emMidName = $_POST['emMiddleName']; $emLastName = $_POST['emLastName'];
	$emAdd = $_POST['emAddress']; $emContact = $_POST['emContact'];

	$file = rand(1000,100000)."-".$_FILES['file']['name'];
	$file_loc = $_FILES['file']['tmp_name'];
	$folder="../uploads/";	 
	move_uploaded_file($file_loc,$folder.$file);
	
	$generatedID = strtoupper($firstName[0].($middleName[0] ?? $middleName[0]) . $lastName[0])."-".date("ymd");

	$sql = "INSERT INTO person(generatedID,firstName,middleName,lastName,nameSuffix,school,address,contact,designation,emFirstName,emMidName,emLastName,emAddress,emContact,file) VALUES('$generatedID','$firstName','$middleName','$lastName','$nameSuffix','$school','$address','$contact','$designation','$emFirstName','$emMidName','$emLastName','$emAdd','$emContact','$file')";
	$result = mysqli_query($conn,$sql);

	if($result){
		header("Location:../views/testPersons.php");
	}else{
		echo "Error! ".mysqli_error($conn);
	}
	

}

function loadPersons(){

	$conn = myConnect();
	$sql = "SELECT * FROM person ORDER BY personID DESC";
	$result = mysqli_query($conn,$sql);

	while($row=mysqli_fetch_array($result)){	
		$rows[] = $row;
	}
	return $result;
}

function deletePerson(){

	$conn = myConnect();
	$id = $_GET['deleteID'];

	$sql = "DELETE FROM person WHERE personID ='$id'";

	$result = mysqli_query($conn,$sql);
	if($result){
		header("Location:../views/testPersons.php");
	}else{
		echo "Error! ".mysqli_error($conn);
	}
}

function editPerson(){

	$conn = myConnect(); $id = $_POST['personID']; $firstName =
	$_POST['FirstName']; $middleName = $_POST['MiddleName']; $lastName =
	$_POST['LastName']; $nameSuffix = $_POST['NameSuffix'];$school = $_POST['School']; $address =
	$_POST['HomeAddress']; $contact = $_POST['Contact']; $designation = $_POST['Designation']; 

	$emFirstName = $_POST['emFirstName']; $emMidName = $_POST['emMiddleName']; $emLastName = $_POST['emLastName']; $emAddress = $_POST['emAddress']; $emContact = $_POST['emContact'];

	$sql = "UPDATE person SET firstName = '$firstName', middleName =
	'$middleName',lastName = '$lastName', nameSuffix = '$nameSuffix', school = '$school',address =
	'$address',contact = '$contact',designation = '$designation', emFirstName = '$emFirstName', emMidName = '$emMidName', emLastName = '$emLastName', emAddress = '$emAddress', emContact = '$emContact' WHERE personID = '$id' "; 

	$result = mysqli_query($conn,$sql);

	if($result){
		header("Location:../views/testPersons.php"); 
	}else{
		echo "Error Updating! ".mysqli_error($conn);
	}
}

function editPic(){
	$conn = myConnect();
	$personID = $_POST['personID'];
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
	$file_loc = $_FILES['file']['tmp_name'];
	$folder="../uploads/";	 
	move_uploaded_file($file_loc,$folder.$file);

	$sql = "UPDATE person SET file= '$file' WHERE personID = '$personID' ";
	$result = mysqli_query($conn,$sql);

	if($result){
		header("Location:../views/testPersons.php"); 
	}else{
		echo "Error Updating! ".mysqli_error($conn);
	}
}

?>







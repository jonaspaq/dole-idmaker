<html>
<head>
	<title>Printing</title>
	<!--PRINT         DIV -->
	<script src="jquery.js"></script>
	<script src="jQuery.print.js"></script>
	<script>
		// Custome code for printing a div
		$(function(){
			$('#print').on('click', function() {
                //Print elements with default options
                $.print(".thedivtobeprinted");
                setTimeout("window.location.href='../views/testPersons.php';", 1000);                
            });
		});
	</script>
	
	<!-- Pra auto click and button on page load-->
	<script type="text/javascript">
    $(document).ready(function() {
        // bind the click event
        $('#print').click(function() {
        });

        // trigger the click event
        // $('#print').click();
    });
	</script>

</head>
<?php
    require_once('../controllers/MyConnect.php');
    $conn = myConnect();

      if(isset($_GET['printid'])){
      	$id = $_GET['printid'];

        $sql = " SELECT * FROM person WHERE personID = $id";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($result);

      	$image = "../uploads/".$row['file'];

		$generatedId = $row['generatedID'];

      	$fnA = $row['firstName'];
		$fnA1 = $fnA[0];
		if($row['middleName']!=NULL){
		$mnA = $row['middleName'];
		$mnA1 = $mnA[0];
		}
		$lnA = $row['lastName'];
		$lnA1 = $lnA[0];

		if($row['emMidName']!=NULL){
		$emnA = $row['emMidName'];
		$emnA1 = $emnA[0];
		}
      }
    ?>
<body style='background: #f9f9f9'>

	<div class="thedivtobeprinted" style="visibility:hidden;border: 1px solid #a1a1a1; width: 300px; background: blue; padding: 10px; margin: 0 auto; text-align: center;">
	
		<h4>HACK SMILE TUTORIALS</h4> 
		thanks for choosing hacksmile to teach you important programming concepts
	
	</div>
	<!---00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000-->



	<!-- FRONT PART -->

	<div class="thedivtobeprinted" style="border: 1px solid #a1a1a1; width: 336px; height: 480px; background:#334DA9 !important; padding: 0px; margin: 0 auto; text-align: center; z-index:999999; position:relative; float:left; margin-left:7%;">

		<div style="float:left;padding:1px;margin-top:7px; z-index:5; position:relative; clear:both; margin-left:5px;">
			<img src="../resources/images/DOLELOGO.png" height="70px">
		</div>

		<div style="border-style:soli; border-color:black; float:left; margin-top:3px; z-index:5; position:relative; ">
			<h5 style="transform: scale(1, 1.2); padding:0px; margin-top:7px; margin-bottom:7px; color:white; "> Republic of the Philippines </h5>	
		</div>
		<div style="border-style:soli; border-color:black;float:left; z-index:5; position:relative; ">
			<h6 style="transform: scale(1, 2.5); padding:0px; margin-top:7px; margin-bottom:7px; color:white; "><strong>DEPARTMENT OF LABOR AND EMPLOYMENT</strong></h6>
		</div>
		<div style="border-style:soli; border-color:black;float:left; z-index:5; position:relative; ">
			<h5 style="transform: scale(1, 1.2); padding:0px; margin-top:7px; margin-bottom:7px; color:white; "> Regional Office No. VII - Central Visayas </h5>	
		</div>
		
		<div style="visibility:hidde; border: 0px solid; float:left; clear:left; width:20%; height: 81.5%; margin-left:1px; margin-right:1px ; z-index:5; position:relative; background:#334DA9 !important;">
			
			<img src="../resources/images/OJT.png" height="100%" width="100%"> 
		</div>
		
		<div style="visibility:hidde; border: 0px solid; float:left; width:20%; height: 55%; width:99%; margin-left:-68px; z-index:1; opacity:0.5; position:relative; ">
			<img src="../resources/images/FLAG.png" height="100%" width="100%">
		</div>

		<div style="border: 1px solid; width:60%; height:40%; float:left; z-index:5; margin-top:-260px; margin-left:30px; position:relative; ">
			<?php echo "<img src='$image' height='100%' width='100%' style='border-radius:3px;'>" ; ?>
		</div>

		<div style="border: 0px solid; width:60%; height:7%; float:left; z-index:5; margin-top:-63px; margin-left:30px; z-index:99; position:relative; ">			
			<strong><p style="width:100%; height:100%; background-color:white; color:black; font-size:28px; margin:0; padding:0;  border-radius:3px;"> <?php echo $generatedId;?></p></strong>
		</div>

		<div style="width:78%; height:15%; float:left; z-index:5; margin-top:-24px; margin-left:4px; z-index:99; position:relative; background-color:#334DA9;border-radius:4px;">			
			 <strong><p style="color:white; font-size:28px; margin:0; padding:0; word-break: break-word; white-space: normal;"><?php echo $row['firstName']; echo "&nbsp"; if($row['middleName']!=NULL){echo $mnA1; echo ".&nbsp";} ?></p></strong>
			 <strong><p style="color:white; font-size:28px; margin:0; padding:0;"><?php echo $row['lastName']; echo "&nbsp"; echo $row['nameSuffix'];?> </p></strong>
		</div>

		<div style="border: 0px solid; width:60%; height:7%; float:left; z-index:5; margin-top:0px; margin-left:30px; z-index:99; position:relative; ">			
			<strong><p style="width:100%; height:100%; background-color:white; color:black; font-size:18px; margin:0; padding:0;  border-radius:3px;"><?php echo strtoupper($row['designation']); ?></p></strong>
		</div>

		<div style="border: 1px solid; width:77%; height:7%; float:left; z-index:5; margin-top:-8px; margin-left:4px; z-index:99; position:relative;">
		</div>

		<div style="border: 0px solid; width:60%; height:3%; float:left; z-index:5; margin-top:0px; margin-left:30px; z-index:99; position:relative; ">			
			<strong><p style="width:100%; height:100%; background-color:white; color:black; font-size:8px; margin:0; padding:0;  border-radius:3px;"> OJT SIGNATURE</p></strong>
		</div>

		<div style="width:100%; height:27.2%; background:white; position:relative; margin-top:350px; z-index: 4">
		</div>

	</div>
	
	<!-- BACK PART -->
	<div class="thedivtobeprinted" style="border: 1px solid #a1a1a1; width: 336px; height: 480px; padding: 0px; margin: 0 auto; z-index:99; position:relative; margin-left:20px; float:left;">

		<div style="border: 1px solid #000000; width:91%; height:10%; margin: 0 auto; margin-top:15px;">
			<p style="margin:0; padding:0; font-size:10px; ">&nbspSCHOOL</p>
			<strong><p style="margin:0; padding:0; font-size:15px; text-align:center; "><?php echo strtoupper($row['school']);?></p></strong>
		</div>

		<div style="border: 1px solid #000000; width:91%; height:10%; margin: 0 auto; margin-top:1px;">
			<p style="margin:0; padding:0; font-size:10px; ">&nbspHOME ADDRESS</p>
			<strong><p style="margin:0; padding:0; font-size:15px; text-align:center; "><?php echo strtoupper($row['address']); ?></p></strong>
		</div>

		<div style="border: 1px solid #000000; width:91%; height:9%; margin: 0 auto; margin-top:1px;">
			<p style="margin:0; padding:0; font-size:10px; ">&nbspCONTACT NUMBER</p>
			<strong><p style="margin:0; padding:0; font-size:15px; text-align:center; "><?php echo strtoupper($row['contact']); ?></p></strong>
		</div>

		<div style="border: 1px solid #000000; width:91%; height:30%; margin: 0 auto; margin-top:7px;">
			<strong><p style="margin:0; padding:0; font-size:15px; text-align:center; ">IN CASE OF EMERGENCY, PLEASE NOTIFY:</p></strong>
			<p style="margin-top:-1px; margin-left:20px; font-size:13px;"><strong>Name: <u><?php echo strtoupper($row['emFirstName']);echo "&nbsp";if($row['emMidName']!=NULL){echo $emnA1; echo ".&nbsp";} echo strtoupper($row['emLastName']); ?></u></strong></p>
			<strong><p style="margin-top:-11px; margin-left:20px; font-size:13px;">Address: <u><?php echo strtoupper($row['emAddress']); ?></u></p></strong>
			<strong><p style="margin-top:-11px; margin-left:20px; font-size:13px;">TEL. NO: <u><?php echo strtoupper($row['emContact']); ?></u></p></strong>
		</div>

		<div style="border: 0px solid #000000; width:84%; height:19%; margin: 0 auto; margin-top:7px;">
			<p style="margin:0; padding:0; font-size:14px;"> This certified that the person whose picture and signature appear hereon is an O.J.T Intern of DOLE-7. </p>
			<p style="margin:0; padding:0; font-size:14px;"> This card is non-transferable and must be surrendered upon separation or end of training. Please report loss to your respective HR/IMSD</p>
		</div>

		<div style="border: 0px solid; width:82%; height:11.5%; background:#334DA9 !important; border-top-left-radius:7px; border-bottom-left-radius:7px; margin-top:10px; margin-left:60px;">
			<img src="../resources/images/DOLELOGO.png" height="86%">
		</div>

		<div style="float:left; margin-top:-56.6px; margin-left:35%;border:0px solid green">
		<p style="transform: scale(1.05, 1); margin:0; padding:0; font-size:11px; color:white;"> DOLE Central Visayas </p>
		
		<p style="margin:0; padding:0; font-size:10px; color:white;"> 3rd & 4th Floors DOLE-VII Building </p>
		<p style="margin:0; padding:0; font-size:10px; color:white;"> Gen Maxilom & Gorordo Avenue, Cebu City </p>
		<p style="margin:0; padding:0; font-size:10px; color:white;"> (032)266-9722, (032)416-6167 </p>
		<p style="margin:0; padding:0; font-size:11px; color:white;"> http:///www.ro7.dole.gov.ph </p>
		</div>



	</div>



	<!---00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000-->
	<div style="clear:both;">
			<center><button id="print" style="visibility:hidde; margin-top: 30px; padding: 10px; border: none; text-align: center; background: black; border-radius: 4px; color: #fff; font-weight: bold; cursor: pointer;">PRINT</button></center>
	</div>
	
	

</body>
</html>
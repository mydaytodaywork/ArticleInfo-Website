<!DOCTYPE HTML>
<head>
<title>Contact</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<?php 
	include("includes/header.php");
	include("includes/connection.php");
	if(isset($_POST['submit_contact'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$institute=$_POST['institute'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		$t=time();
		$timest=date("Y-m-d h:i:s",$t);
		$query="INSERT INTO `contact_us_table`(`name`, `email`, `institute`, `subject`, `message`, `received_time`) VALUES ('{$name}','{$email}','{$institute}','{$subject}','{$message}','{$timest}')";
		$result=mysqli_query($connection,$query);
		echo "<br/><h2 style='color:green; font-size:18px;'><center>Succesfully Recorded. We will be contacting you soon. Thank You. <center></h2>";
	}
?>

<div class="wrap">
	<div class="main">
		<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	
      				</div>
      			<div class="company_address">
				     	<h3>My Information :</h3>
						    	<p>Kamal Agrawal</p>
						   		<p>A211 DBA Hall, NIT Rourkela</p>
						   		<p>Odisha, India</p>
				   		<p>Phone:9090538616</p>
   						<p>Email: <span>kamalagrawal777@gmail.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<?php include("includes/contactusform.php"); ?>				
			  </div>
    </div>
</div>
	
	<?php include("includes/footer.php"); ?>
  </div>
</body>
</html>


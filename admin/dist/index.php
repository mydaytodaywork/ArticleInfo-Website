<!DOCTYPE HTML>
<head>
<title>Admin</title>
</head>
<?php
	include("includes/connection.php");
	if(isset($_POST['confirm'])){
		//get the data
		/*$query="SELECT `parainfo`, `author`, `subtime`, `kind`, `branch`, `links` FROM `requests` WHERE requestid=$_POST['requestid'] ";
		$result=mysqli_query($connection,$query);
		$row=mysqli_fetch_row($result);*/

		//Received data from the confiramation form by the admin
		$requestid=$_POST['requestid'];
		$branch=$_POST['branch'];
		$kind=$_POST['kind'];
		$topic=$_POST['topic'];
		$shortinfo=$_POST['shortinfo'];
		$longinfo=$_POST['longinfo'];
		$author=$_POST['author'];
		$links=$_POST['links'];
		$subtime=$_POST['subtime'];

		
		/*----------------------------------------Branch-----------------------------------------*/
		//get the branch id
		$query="INSERT INTO `branch_table`(`branch`, `counter`) VALUES ($branch,0)";
		$run=mysqli_query($query);
		//update the counter of branch id
		$query="UPDATE `branch_table` SET `counter`=counter+1 WHERE branch=$branch";
		$run=mysqli_query($query);
		//get the branch id
		$query="SELECT `branchid` FROM `branch_table` WHERE branch=$branch";
		$run=mysqli_query($query);
		$row=mysqli_fetch_row($run);
		//brach id set
		$branchid=$row[0];


		/*----------------------------------------Kind-----------------------------------------*/
		//get the kind id
		$query="INSERT INTO `kind_table`(`kind`, `counter`) VALUES ($kind,0)";
		$run=mysqli_query($query);
		//update the counter of kind id
		$query="UPDATE `kind_table` SET `counter`=counter+1 WHERE kind=$kind";
		$run=mysqli_query($query);
		//get the kind id
		$query="SELECT `kindid` FROM `kind_table` WHERE kind=$kind";
		$run=mysqli_query($query);
		$row=mysqli_fetch_row($run);
		//brach id set
		$kindid=$row[0];


		/*--------------------------------------Now insert--------------------------------------*/

		//insert into posts
		$query="INSERT INTO `posts`(`branchid`, `kindid`, `topic`, `shortinfo`, `longinfo`, `author`, `links`, `subtime`) VALUES ('{$branchid}','{$kindid}',
		'{$topic}','{$shortinfo}','{$longinfo}','{$author}','{$links}','{$subtime}')";
		$insertpost=mysqli_query($connection,$query);

		//delete from requests
		$query="delete from requests where requestid=$requestid";
		$deleterequest=mysqli_query($connection,$query);

	}
?>
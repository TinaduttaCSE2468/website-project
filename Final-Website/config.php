<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="registrationform";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection failed:" .mysqli_connect_error());
}
if(isset($_POST['save']))
{
	$N=$_POST['N'];
	$FN=$_POST['FN'];
	$MN=$_POST['MN'];
	$DateB=$_POST['DateB'];
	$NID=$_POST['NID'];
	$Gender=$_POST['Gender'];
	$Cell=$_POST['Cell'];
	$City=$_POST['City'];
	$Address=$_POST['Address'];
	$BP=$_POST['BP'];
	$Stroke=$_POST['Stroke'];
	$HD=$_POST['HD'];
	$KD=$_POST['KD'];
	$RD=$_POST['RD'];
	$Cancer=$_POST['Cancer'];
	$CV=$_POST['CV'];
	$sql_query = "INSERT INTO regiform(N,FN,MN,DateB,NID,Gender,Cell,City,Address,BP,Stroke,HD,KD,RD,Cancer,CV) Values('$N','$FN','$MN','$DateB','$NID','$Gender','$Cell','$City','$Address','$BP','$Stroke','$HD','$KD','$RD','$Cancer','$CV')";
	if(mysqli_query($conn,$sql_query))
	{
		echo "New Details Entry Inserted Successfully !";
	}
	else
	{
		echo "error";
	}
	mysqli_close($conn);
}
?>


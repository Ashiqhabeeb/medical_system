<?php 
include('connection.php');
session_start();
$DocName=$_POST['doc_name'];
$Name=$_POST['name'];
$Time=$_POST['time'];
$Date=$_POST['date'];
$Status='pending';

if(isset($_POST['submit']))
{
$sql="insert into appointment(doc_name,name,time,date,status) values ('".$DocName."','".$Name."','".$Time."','".$Date."','".$Status."')";
if(!$result=$conn->query($sql))
{
	die("there was an error in running the query ['.$conn->error.']");
}
else
{
	header('location:base3.php');
}
mysqli_close($conn);
}
?>
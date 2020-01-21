<?php 
include('connection.php');
$Name=$_POST['name'];
if(isset($_POST['submit']))
{
$sql="UPDATE appointment SET status='approved' where name='".$Name."'";
if(!$result=$conn->query($sql))
{
	die("there was an error in running the query ['.$conn->error.']");
}
else
{
	header('location:base4.php');
}
mysqli_close($conn);
}
?>
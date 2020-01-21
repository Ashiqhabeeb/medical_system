<?php
include('connection.php');
session_start();
if(isset($_POST['login']))	
{	
$name=$_POST['name'];
$password=$_POST['password'];
$sql="select * from doctorreg where username='".$name."' and password='".$password."'";
$result=mysqli_query ($conn,$sql);
if(mysqli_num_rows($result)>0)
{	
	while($row=mysqli_fetch_assoc($result))
	{
    header('location:base1.php');	
    }
}
	else
	{
		echo "email or password incorrect";
	}
}
mysqli_close($conn);
?>
<?php 
include('connection.php');
if(isset($_POST['submit']))
{
	$Name=$_POST['name'];
	$Age=$_POST['age'];
	$Phone=$_POST['phoneno'];
	$Gender=$_POST['gender'];
	$Address=$_POST['address'];
	$Password=$_POST['password'];
	
	
        if (!preg_match("/^[A-Za-z' -]{1,50}$/",$Name)) 
          {
            echo "Enter valid name"; 
          }
        else if(preg_match('/^[0-9]{10}+$/', $Phone) != true)
        {
            echo "Enter valid mobile number";
        }
      
		else if(!preg_match("/^[A-Za-z0-9.,' -]{1,200}$/", $Address))
        {
            echo "Enter valid address";
        }
        else if(strlen($Password) < 6)
        {
            echo "Failed! Enter password atleast 6 characetrs";
        }
       
        else
        {

	$sql="insert into patientreg(Name,Age,Phone,Gender,Address,password) values ('".$Name."','".$Age."','".$Phone."','".$Gender."','".$Address."','".$Password."')";
	if(!$result=$conn->query($sql))
	{
		die("there was an error in running the query ['.$conn->error.']");
	}
	else
	{
		header('location:patientreg.php');
	}
	}
}
mysqli_close($conn);

?>
<?php 
include('connection.php');

if(isset($_POST['submit']))
{
	$DocName=$_POST['doc_name'];
	$Phone=$_POST['phoneno'];
	$Email=$_POST['email'];
	$Qualification=$_POST['qual'];
	$Certificate=$_POST['cert'];
	$Department=$_POST['dept'];
	$Clinic_address=$_POST['address'];
	$Clinic_timing=$_POST['time'];
	$Username=$_POST['username'];
	$Password=$_POST['password'];
	
        else if (!preg_match("/^[A-Za-z' -]{1,50}$/",$DocName)) 
          {
            echo "Enter valid name"; 
          }
        
        else if(preg_match('/^[0-9]{10}+$/', $Phone) != true)
        {
            echo "Enter valid mobile number";
        }
        else if (!filter_var($Email, FILTER_VALIDATE_EMAIL))
        {
            echo "Invalid email format";
        }
		else if(!preg_match("/^[A-Za-z0-9.,' -]{1,200}$/", $Clinic_address))
        {
            echo "Enter valid address";
        }
		else if(preg_match('/^[0-9]{10}+$/', $Clinic_timing) != true)
        {
            echo "Enter valid mobile number";
        }
        else if(strlen($password) < 6)
        {
            echo "Failed! Enter password atleast 6 characetrs";
        }
        else
        {
		$sql="insert into doctorreg(doc_name,phone,email,qualification,certificate_no,department,clinic_address,clinic_timing,username,password) values ('".$DocName."','".$Phone."','".$Email."','".$Qualification."','".$Certificate."','".$Department."','".$Clinic_address."','".$Clinic_timing."','".$Username."','".$Password."')";
		if(!$result=$conn->query($sql))
		{
			die("there was an error in running the query ['.$conn->error.']");
		}
		else
		{
			header('location:doctorreg.php');
		}
		}
}
mysqli_close($conn);
}
?>
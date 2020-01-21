<?php
require_once 'connection.php';
$id=$_POST['id'];
$name=$_POST['doc_name'];
$phone=$_POST['phoneno'];
$email=$_POST['email'];
$qualification=$_POST['qualification'];
$pmdc=$_POST['cert'];
$department=$_POST['department'];
$c_address=$_POST['clinic_address'];
$c_timing=$_POST['clinic_timing'];
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['submit']))
{
    $sq=mysqli_query($conn,"update doctorreg set doc_name='".$name."',phone='".$phone."',email='".$email."',qualification='".$qualification."',certificate_no='".$pmdc."',department='".$department."',clinic_address='".$c_address."',clinic_timing='".$c_timing."',username='".$username."',password='".$password."' WHERE doc_name='".$name."'");

    header('location:editdoctor.php');
 
}
mysqli_close($conn);
?>

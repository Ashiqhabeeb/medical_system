<?php
require_once 'connection.php';
if (isset($_POST['sub']))
{
	$id=$_POST['id'];
	$name=$_POST['doc_name'];
	$sql="DELETE FROM doctorreg WHERE doc_name='".$name."'";
	if(!$result=$conn->query($sql))
	{
		echo 'error';
	}
	else
	{
	require_once 'deletedoctor.php';
	} 
}
?>

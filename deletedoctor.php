<!doctype html>
<html>
<head>
<style>table,td,th{border-collapse:collapse;border:2px solid black;padding:5px;}
</style>

</head>



<?php 

include("connection.php"); 

?>
<h1>Appointments</h1>
<?php $result2=mysqli_query($conn,"SELECT * from doctorreg") ?>
<table class="">
<tr>
<th style="width:80px" class="frm" >id </th>

<th style="width:80px" class="frm" >Dr.Name </th>
<th class="frm">Phone</th>
<th class="frm">Email </th>
<th class="frm">Qualification</th>
<th class="frm">PMDC</th>
<th class="frm">Department</th>
<th class="frm">clinic_address</th>
<th class="frm">clinic_timing</th>
<th class="frm">username</th>
<th class="frm">password</th>



<th class="frm"></th>

</tr>




<?php while($row2=mysqli_fetch_assoc($result2))
        {?>
       
                   
                   <form action="deletedocsub.php" method="post">
				   <tr>
                   <td class="frm"><input style="width:20px" class="" name="id" value="<?php echo $row2["doc.id"] ?>"></td>

                   <td class="frm"><input type="text" style="width:60px" class="" name="doc_name" value="<?php echo $row2["doc_name"] ?>"></td>
					<td class="frm"><input style="width:60px" class="" name="phoneno" value="<?php echo $row2["phone"] ?>"></td>
                   <td class="frm"><input style="width:80px" class="" name="email" value="<?php echo $row2["email"] ?>"></td>
                    <td class="frm"><input style="width:60px" class="" name="qualification" value="<?php echo $row2["qualification"] ?>"></td>
                    <td class="frm"><input style="width:80px" class="" name="cert" value="<?php echo $row2["certificate_no"] ?>"></td>
					<td class="frm"><input style="width:80px" class="" name="department" value="<?php echo $row2["department"] ?>"></td>
                    <td class="frm"><input style="width:80px" class="" name="clinic_address" value="<?php echo $row2["clinic_address"] ?>"></td>
                    <td class="frm"><input style="width:60px" class="" name="clinic_timing" value="<?php echo $row2["clinic_timing"] ?>"></td>
                    <td class="frm"><input style="width:60px" class="" name="username" value="<?php echo $row2["username"] ?>"></td>
                    <td class="frm"><input style="width:60px" class="" name="password" value="<?php echo $row2["password"] ?>"></td>

                    <td class="frm"><input  type="submit"  class="btn-primary mt-md-3 px-5 rounded shadow" name="sub" value="delete"></td>
					</tr>
                    </form>

                  

                     
                  
                    
                
                

                  <?php }
                  ?>		
            </table>
       
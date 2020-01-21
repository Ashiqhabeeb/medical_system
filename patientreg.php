<?php 
include("base1.php");
?>
<form  action="insertpatient.php" name="login" method="post" class="m-auto py-3 p-3 form-style rounded" onsubmit="return form()">

		Name<input type="text" class="form-control inputcomponent mt-md-3 space" name='name' required="required">
		
		Age<input type="text" class="form-control inputcomponent mt-md-3 space" name='age' required="required">
			
		Phone<input type="text" id="phoneno" class="form-control inputcomponent mt-md-3 space" name='phoneno' required="required">

		Gender<input type="text" class="form-control inputcomponent mt-md-3 space" name='gender' required="required">

		Address<input type="text" class="form-control inputcomponent mt-md-3 space" name='address' required="required">
		
		Password<input type="password" id="password" class="form-control inputcomponent mt-md-3 space" name='password' required="required">

							
							<button type="submit" name="submit" class="btn-primary mt-md-3 px-5 rounded shadow">Submit</button>
								
								<button type="button" class="btn btn-default loginbutton m-t-5">
								<span class="google-button__icon">	
								</span>
						
								</button>
						



						</form>
						
							<script>
			function form()
			{
				var str=document.getElementById('password').value;
				var mb=document.getElementById('phoneno').value;
				if(str.length<6)
				{
					alert("too_short");
					return false;
				}
				else if(mb.length!=10){
					alert("Invalid mobileno");
					return false;
					
				}
			}
			
		</script> 
						

					  
		
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/style.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<header class="bg-color py-2 head text-center text-bold">
			<h4 class="container">Gemini Consulting & Sevices</h4>
		</header>
<div class="container">
       <table class="t1 table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="insertdoctor.php" name="login" method="post" onsubmit="return form()">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="doc_name" placeholder="full name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						  <div class="form-group">
                            <label class="col-md-4 control-label">Phone</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span><input id="phoneno" name="phoneno" placeholder="phone number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="fullName" name="email" placeholder="email" class="form-control" required="true" value="" type="email"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Qualification</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="fullName" name="qual" placeholder="qualification" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">PMDC Certificate no.</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="cert" placeholder="num" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						  <div class="form-group">
                            <label class="col-md-4 control-label">Department</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="dept" placeholder="specialization" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Clinic Address</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="address" placeholder="address" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Clinic Timing</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span><input id="postcode" name="time" placeholder="timing" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                   
						 <div class="form-group">
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="phoneNumber" name="username" placeholder="Username" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="password" name="password" placeholder="Password" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                      </fieldset>
					  <button type="submit" name="submit"class="btn-primary mt-md-3 px-5 rounded shadow">Submit</button>
                   </form>
                </td>             
             </tr>
          </tbody>
       </table>
    </div>
	
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
		
	
<footer class="bg-color py-2 p-5 foot1 text-center">
			<h5 class="text-center">Powered by Gemini Consultancy </h5>
		</footer>
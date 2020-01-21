<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> dash board</title>
		<!-- Custom fonts for this template-->
		<link  rel="stylesheet" href="fontawesome/css/all.min.css">
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style3.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style3.css">
		<style>table, th, td { border: 2px solid grey;padding:10px;color:white;background-color:black;margin-top:10px;}
		</style>
</head>

<body id="page-top">


<!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
			<div>
		<img src="img/logo.png" class="img-fluid"></img>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php" class="text-center">
          <i class="fas fa-user user-font px-4"></i></a></li>

        <!-- Divider -->
	  <li class="nav-item">
        <a class="nav-link collapsed" href="base4.php" ><h5>Doctors</h5>
		<a class="nav-link collapsed" href="base4.php" ><h5>View Appointments</h5>
     
		 </a></li> 
		  
				
		  
      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Attendance Menu -->
      
      <!-- Sidebar Toggler (Sidebar) -->
     

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
		<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="faculty-login.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="faculty-profile.php"  >
                <i class="fas fa-user "><p> Myprofile</p></i>
              </a>
              
            </li>

			
			<li class="nav-item">
              <a class="nav-link " href="index.php" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
		
						
					
					<table class="tab">
							<tr>
							
							<td>Dr.Name</td>
							<td>Department</td>
							<td>Timing</td>
							<td>Patient name</td>
							<td>Time</td>
							<td>Date</td>
							<td>Action</td>
							
							</tr>
							<?php
					include 'connection.php';
				
					$sql="select * from doctorreg";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
						?>
							<tr>
							<form action="insertappoint.php" name="login" method="post">	
								
								<td><input type="text" name="doc_name" value="<?php echo $row['doc_name'];?>" readonly> </td>
								<td><input type="text" name="department" value="<?php echo $row['department'];?>"> </td>
								<td><input type="text" name="clinic_timing" value="<?php echo $row['clinic_timing'];?>"> </td>
								<td><input type="text" name="name"></td>
								<td><select name="time">
										<option value="time">Time</option> 
										<option value="9am">9am</option>.
										<option value="2pm">2pm</option>
										<option value="4pm">4pm</option>
									</select>
								</td>
								<td><input type="date" name="date"></td>
								<td><input type="submit" value="Apply" name="submit"></td>
								</form>
							</tr>
							
		  		
				
				
				
				
				
				
				
				
				<?php
									}
									?>
		
</body>

</html>

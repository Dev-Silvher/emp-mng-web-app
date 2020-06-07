<!-- 
Author: Silvher
Date: June 7, 2020
 -->
<?php 
$pages = array();
$pages["dashboard.php"] = "Dashboard";
$pages["employee_list.php"] = "Employee List";

$activePage = "employee_list.php";

include('../class/User.php');
$user = new User();
$user->adminLoginStatus();
include('include/header.php');
?>
<title>Employee Management Web Application</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<script src="js/moment.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/users.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/table.css">
<?php include('include/container.php');?>
<div class="container contact">	
	<?php include 'menus.php'; ?>
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   
		<h3><strong><span class="fa fa-dashboard"></span> Employee List</strong></h3>
		<hr>		
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-12">
					<button type="button" name="add" id="addUser" class="btn btn-success btn-md">Add</button>
				</div>
			</div>
		</div>
		<table id="userList" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Address</th>
					<th>Mobile</th>
					<th>Age</th>
					<th>Years of Service</th>					
					<th>Status</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
		</table>
	</div>
	<div id="employeeModal" class="modal fade">
    	<div class="modal-dialog modal-lg">
    		<form method="post" id="employeeForm">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Employee</h4>
    				</div>
    				<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstname" class="control-label">First Name*</label>
									<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>							
								</div>
								<div class="form-group">
									<label for="middlename" class="control-label">Middle Name</label>							
									<input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name">							
								</div>
								<div class="form-group">
									<label for="lastname" class="control-label">Last Name</label>							
									<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">							
								</div>
								<div class="form-group">
									<label for="designation" class="control-label">Position</label>							
									<input type="text" class="form-control" id="designation" name="designation" placeholder="Position">							
								</div>	
								<div class="form-group">
									<label for="mobile" class="control-label">Mobile</label>							
									<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">							
								</div>	 
								<div class="form-group">
									<label for="address" class="control-label">Address</label>							
									<input type="text" class="form-control" id="address" name="address" placeholder="Address">							
								</div>	
									
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="birthdate" class="control-label">Birth Date</label>							
									<input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="YYYY-MM-DD" required>							
								</div>
								<div class="form-group">
									<label for="hireddate" class="control-label">Hire Date</label>							
									<input type="date" class="form-control" id="hireddate" name="hireddate" placeholder="YYYY-MM-DD" required>							
								</div>
								<div class="form-group">
									<label for="gender" class="control-label">Gender: </label>							
									<label class="radio-inline">
										<input type="radio" name="gender" id="male" value="male" required>Male
									</label>
									<label class="radio-inline">
										<input type="radio" name="gender" id="female" value="female" required>Female
									</label>							
								</div>
								<div class="form-group">
									<label for="martialstat" class="control-label">Martial Status: </label>							
									<label class="radio-inline">
										<input type="radio" name="martialstat" id="single" value="single" required>Single
									</label>
									<label class="radio-inline">
										<input type="radio" name="martialstat" id="married" value="married" required>Married
									</label>							
								</div>
								<hr>
								<div class="form-group">
									<label for="email" class="control-label">Email*</label>							
									<input type="text" class="form-control"  id="email" name="email" placeholder="Email" required>							
								</div>	 
								<div class="form-group" id="passwordSection">
									<label for="password" class="control-label">Password*</label>							
									<input type="password" class="form-control"  id="password" name="password" placeholder="Password" required>							
								</div>
								<hr>
								<div class="form-group">
									<label for="gender" class="control-label">Status: </label>							
									<label class="radio-inline">
										<input type="radio" name="status" id="active" value="active" required>Active
									</label>
									<label class="radio-inline">
										<input type="radio" name="status" id="pending" value="pending" required>Pending
									</label>							
								</div>
								<div class="form-group">
									<label for="user_type" class="control-label">Employee Type: </label>							
									<label class="radio-inline">
										<input type="radio" name="user_type" id="general" value="general" required>General
									</label>
									<label class="radio-inline">
										<input type="radio" name="user_type" id="administrator" value="administrator" required>Administrator
									</label>							
								</div>	
							</div>
						</div>
						
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="userid" id="userid" />
    					<input type="hidden" name="action" id="action" value="updateUser" />
    					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>	
<?php include('include/footer.php');?>
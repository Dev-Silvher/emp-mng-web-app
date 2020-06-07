<!-- 
Author: Silvher
Date: June 6, 2020
 -->
<?php 
$pages = array();
$pages["dashboard.php"] = "Dashboard";
$pages["employee_list.php"] = "Employee List";

$activePage = "dashboard.php";

include('../class/User.php');
$user = new User();
$user->adminLoginStatus();
include('include/header.php');
?>
<title>Employee Management Web Application</title>
<link rel="stylesheet" href="css/style.css">
<?php include('include/container.php');?>
<div class="container contact">	
	<?php include 'menus.php'; ?>
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   
		<h3><strong><span class="fa fa-dashboard"></span> My Dashboard</strong></h3>
		<hr>		
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-body bk-primary text-light">
								<div class="stat-panel text-center">
									<div class="stat-panel-number h1 "><?php echo $user->totalUsers(""); ?></div>
									<div class="stat-panel-title text-uppercase">Total Users</div>
								</div>
							</div>											
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-body bk-success text-light">
								<div class="stat-panel text-center">
									<div class="stat-panel-number h1 "><?php echo $user->totalUsers('active'); ?></div>
									<div class="stat-panel-title text-uppercase">Total Active Users</div>
								</div>
							</div>											
						</div>
					</div>		
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-body bk-success text-light">
								<div class="stat-panel text-center">
									<div class="stat-panel-number h1 "><?php echo $user->totalUsers('pending'); ?></div>
									<div class="stat-panel-title text-uppercase">Total Pending Users</div>
								</div>
							</div>											
						</div>
					</div>													
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-body bk-danger text-light">
								<div class="stat-panel text-center">												
									<div class="stat-panel-number h1 "><?php echo $user->totalUsers('deleted'); ?></div>
									<div class="stat-panel-title text-uppercase">Total Deleted Users</div>
								</div>
							</div>											
						</div>
					</div>							
				</div>
			</div>
		</div>		
	</div>
</div>	
<?php include('include/footer.php');?>
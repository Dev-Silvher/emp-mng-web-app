<?php
include('class/User.php');
$user = new User();
$user->loginStatus();
include('include/header.php');
?>
<title>Employee Management Web Application</title>
<?php include('include/container.php');?>
<div class="container contact">	
	<?php include('menu.php');?>
	<div class="table-responsive">	
	You're welcome!
	</div>
</div>	
<?php include('include/footer.php');?>
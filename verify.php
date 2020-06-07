<?php 
include('class/User.php');
$user = new User();
$isVerified =  $user->verifyRegister();
include('include/header.php');
?>
<title>Employee Management Web Application</title>
<?php include('include/container.php');?>
<div class="container contact">		
	<div class="alert alert-success col-sm-12" >
		<?php if ($isVerified) { ?>
			Your registration verified successfuly. You can <a href="login.php">login</a> to access your account.
		<?php } else { ?>
			Invalid request.
		<?php } ?>
	</div>	
</div>
<?php include('include/footer.php');?>
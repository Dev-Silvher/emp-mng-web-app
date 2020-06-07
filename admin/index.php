<!-- 
Author: Silvher
Date: June 7, 2020
 -->
<?php 
include('../class/User.php');
$user = new User();
$errorMessage =  $user->adminLogin();
include('include/header.php');
?>
<title>Employee Management Web Application</title>
<?php include('include/container.php');?>
<div class="container admin-contact">	
	<div class="col-md-12">                    
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="panel-title">Administrator</div>                        
			</div> 
			<div class="panel-body" >
				<?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } ?>
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="email" name="email" placeholder="email" required>                                        
					</div>                                
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password"placeholder="password" required>
					</div>
					<div class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-primary">						  
						</div>						
					</div>	
					<!-- <div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						User: admin@webdamn.com<br>
						password:123				  
						</div>						
					</div>	 -->
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
<?php include('include/footer.php');?>
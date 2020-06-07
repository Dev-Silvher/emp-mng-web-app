<?php 
include('class/User.php');
$user = new User();
$errorMessage =  $user->login();
include('include/header.php');
?>
<title>Employee Management Web Application</title>
<?php include('include/container.php');?>
<div class="container employee-contact">	
	<div class="col-md-12">                    
		<div class="panel panel-info" >
			<div class="panel-heading">
				<div class="panel-title">Employee Portal</div>                        
			</div> 
			<div class="panel-body" >
				<?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } ?>
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="loginId" name="loginId"  value="<?php if(isset($_COOKIE["loginId"])) { echo $_COOKIE["loginId"]; } ?>" placeholder="email">                                        
					</div>                                
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="loginPass" name="loginPass" value="<?php if(isset($_COOKIE["loginPass"])) { echo $_COOKIE["loginPass"]; } ?>" placeholder="password">
					</div>            
					<div class="input-group">
					  <div class="checkbox">
						<label>
						  <input  type="checkbox" id="remember" name="remember" <?php if(isset($_COOKIE["loginId"])) { ?> checked <?php } ?>> Remember me
						</label>
						<label><a href="forget_password.php">Forget your password</a></label>	
					  </div>
					</div>
					<div class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-info">						  
						</div>						
					</div>
					 <div class="form-group">
						<div class="col-md-12 control">
							<div class="reg-employee" >
								Don't have an account! 
							<a href="register.php">
								Register 
							</a>Here. 
							</div>
						</div>
					</div>    	
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
<?php include('include/footer.php');?>
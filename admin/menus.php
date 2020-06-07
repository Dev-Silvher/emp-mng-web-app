<!-- 
Author: Silvher
Date: June 7, 2020
 -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="profile.php"><i class="fa fa-user-secret"></i> My Profile</a></li>
						<li><a href="change_password.php"><i class="fa fa-lock"></i> Change Password</a></li>
                    </ul>
                </li>
                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </div>    
</div>
<div id="side-nav" class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
    <ul class="nav nav-pills nav-stacked">
        <?php foreach($pages as $url=>$title):?>
            <li <?php if($url === $activePage):?>class="active"<?php endif;?>>
                <a  href="<?php echo $url;?>">
                    <?php echo $title;?>
                </a>
            </li>
        <?php endforeach;?>
	</ul>
</div>



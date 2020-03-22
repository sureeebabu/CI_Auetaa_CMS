<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/ace.min.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/font-awesome.min.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/myStyle.css">
    <script src="<?php echo base_url(); ?>js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>js/site.js"></script>
</head>

<body class="login-layout light-login">
<div class="main-container">
<div class="main-content">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="login-container">
                <div class="space-6"></div>
                <div class="center">
                    <h4 class="blue" id="id-company-text">
                        CMS
                    </h4>
                </div>

                <div class="space-6"></div>

                <div class="position-relative">
                    <div id="login-box" class="login-box visible widget-box no-border">
                        <div class="widget-body">
                            <div class="widget-main">
                                <h4 class="header blue lighter bigger text-center">
                                    <i class="fa fa-sign-in"></i>
                                    Login
                                </h4>

                                <?php 
                                if(isset($_SESSION['loginError']))
                                {
                                    echo '
                                    <div class="alert alert-block alert-danger">
                                    <i class="ace-icon fa fa-times red"></i>
                                    <strong class="red">
                                    '.$_SESSION['loginError'].'    
                                    </strong>
                                    </div>
                                    ';
                                    $_SESSION['loginError'] = null;
                                }
                                ?>

                                <div class="space-6"></div>
                                <form method="post" id="loginValidation" action="<?php echo site_url('login/process'); ?>">
                                    &nbsp;
                                    <label class="block clearfix">
                                        <span class="block input-icon input-icon-right">
                                            <input type="email" name="userEmail" id="userEmail" required="required" class="form-control" placeholder="Enter User Email ID" />
                                            <i class="ace-icon  fa fa-user"></i>
                                        </span>                            
                                    </label>
                                    <label class="block clearfix" style="padding-top:6px;" >
                                        <span class="block input-icon input-icon-right">
                                            <input type="Password" name="userPassword" id="userPassword" required="required" class="form-control"  placeholder="Enter Password"  >
                                            <i class="ace-icon  fa fa-lock fa-lg "></i>
                                        </span>

                                    </label>

                                    <div class="space"></div>

                                    <div class="clearfix">
                                        <input type="submit" class="width-35 pull-right btn btn-sm btn-primary" value="Login"  >
                                    </div>
                                    <div class="space-4"></div>

                                    <?php echo isset($error) ? $error : ''; ?>  

                                </form>

                                <div class="space-6"></div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>
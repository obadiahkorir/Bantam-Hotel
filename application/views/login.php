<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
    <title>Bantam</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/style.css">
<body>
<div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
            <form method="post" class="form-signin" action="<?php echo site_url('Dashboard'); ?>">  
						<div class="account-logo">
                            <a href="index.html"><img src="../assets/img/logo.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="text" autofocus="" name="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass"  class="form-control">
                        </div>
                        <div class="form-group text-center">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="<?php echo site_url('Register'); ?>">Register Now</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>./assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>./assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>./assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>./assets/js/app.js"></script>
</body>
</html>
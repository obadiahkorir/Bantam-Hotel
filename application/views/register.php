<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png" />
    <title>bantam</title>

<?php echo link_tag('assets/css/bootstrap.min.css'); ?>
<?php echo link_tag('assets/css/font-awesome.min.css'); ?>
<?php echo link_tag('assets/css/style.css'); ?>

<body>
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                     <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>
                      <form role="form" method="post" class="form-signin" action="<?php echo base_url('user/register_user'); ?>">
						<div class="account-logo">
                            <a href="index.html"><img src="../assets/img/logo.png" alt=""></a>
                        </div>
                          <fieldset>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Signup</button>
                        </div>
                          <fieldset>
                        <div class="text-center login-link">
                            Already have an account? <a href="<?php echo site_url('Login'); ?>">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php echo link_tag('assets/js/jquery-3.2.1.min.js'); ?>
<?php echo link_tag('assets/js/popper.min.js'); ?>
<?php echo link_tag('assets/js/bootstrap.min.js'); ?>
<?php echo link_tag('assets/js/app.js'); ?>
</body>
</html>
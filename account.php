<?php
/** --- B A S E F U N C T I O N S ---

    This 1 file sets up project-wide things like authentication -
    DO NOT REMOVE
**/
include('protostrap.php');


/**   --- I D I V I D U A L  A C T I V A T I O N S  ---

     These few lines are unique to every page.
     Here's where you define which elements are activated,
     be it tabs or navigation etc
**/
$navbarClasses = Array('active','','','','','',''); // Do NOT remove line, only add and remove elements in the brackets.
$tabClasses = Array('','','','','active'); // Do not remove line, only add and remove elements in the brackets.

/** END OF ACTIVATIONS **/



?><!DOCTYPE html>
<html lang="en">
  <head>

    <title>Account</title>
    <meta name="description" content="">
    <meta name="author" content="">

<?php
// this includes all the markup that loads css files and similar stuff,
// if you have to add more css, that's the place to do it.
include('./headTag.php');?>

  </head>

  <body>
<?php
// this includes the markup for iOS a styled tabbar
//include('./iosTabbar.php');

include('./navBarStaticTop.php');?>

    <div class="container">

<?php // this includes the header
// include('./header.php');?>

<?php
if($loggedIn){ ?>
    <div class="row">
        <span class="span12">
            <br><br>
            <h3>John Doe</h3>
            <ul class="stacks">
                <li >
                    <a >
                        One
                    </a>
                </li>
                <li>
                    <a class="">
                        Two
                    </a>
                </li>
            </ul>
            <br><br>
            <a class="btn" href="?logout=true">Logout</a>
        </span>
    </div>

<?php } else { ?>
    <div class="row">
        <span class="span6">
            <h3>Sign in</h3>
            Type anything into the Email field and submit to sign in<br><br>
            Type 'fail' to simulate auth-error<br><br>
            <?php if(!empty($showLoginError)){ ?>
                <div class='alert alert-error'>
                    <button class='close' data-dismiss='alert' type='button'>×</button>
                    <strong>Wrong Username or password</strong><br>
                    Please re-enter your data, make sure Caps Lock is not pressed unintentionally.
                </div>
            <?php } ?>
            
        </span>
        <span class="span6">
                    
        </span>
    </div>

    <div class="row">
        <span class="span3">
            <form action='' method='post'>
                <input name='login' class='input-block-level' type='email' placeholder='Email'fail' to simulate auth-error'><br>
                <input name='pass' class='input-block-level' type='password' placeholder='Password'>
                <br>
                <label class='checkbox'>
                    <input type='checkbox' name='check' id='ckeck' value='1'>
                    Remember me
                </label>
                <button type='submit' class='btn-block btn btn-primary'>Sign in</button>
                <br>
                            <a >I forgot my password</a>
            
            </form>
            
            
            No Account?<br>
            <a href='register.php'class='btn btn-block'>Sign up</a>
    </div>
<?php } ?>






      <hr>

<?php // this includes the footer
include('./footer.php');?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
<?php include ('protostrap_javascripts.php');?>
  </body>
</html>

<?php
/**
    These few lines are unique to every page.
    Here's where you define which elements are activated, be it tabs or navigation etc

**/
$tabClasses = Array('active','','','',''); // Do not remove line, only add and remove elements in the brackets.


?><!DOCTYPE html>
<html lang="en">
  <head>

    <title>Protostrap - a prototyping framework based on Bootstrap</title>
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
include('./iosTabbar.php');?>

    <div class="container">

<?php // this includes the footer
include('./header.php');?>


<!--
  ** TABS **
-->
<div class="tabbable">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Itineraries</a></li>
    <li><a href="#tab2" data-toggle="tab">Events</a></li>
    <li><a href="#tab3" data-toggle="tab">Today</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
        <h3>The highest Mountain</h3>
        <img data-ph="300:80:High Mountain" />
         Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris.

    </div>
    <div class="tab-pane" id="tab2">
      <p>Howdy, I'm in Section 2.</p>
    </div>
    <div class="tab-pane" id="tab3">
      <p>Howdy, I'm in Section 3.</p>
    </div>
  </div>
</div>

<!--
  ** TABS END **
-->

      <hr>

<?php // this includes the footer
include('./footer.php');?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.svg.placeholder.js"></script>
    <!-- You can add your code in this file -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>

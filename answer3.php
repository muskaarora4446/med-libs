<!DOCTYPE html>
<html lang="en"><head>
  <title>Mad Libs!</title>
  <meta charset="utf-8">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <link href="css/custom.css" rel="stylesheet">
</head>

<?php 
SESSION_start();

  $one=$_GET['one'];

  $two=$_GET['two'];

  $three=$_GET['three'];

  $four=$_GET['four'];

  $five=$_GET['five'];

  $six=$_GET['six'];

  $seven=$_GET['seven'];

  $eight=$_GET['eight'];

  $nine=$_GET['nine'];

  $ten=$_GET['ten'];





?>

<body>
<header class="page-header">
  <span class="logo">Mad Libs!</span></header>
<div class="main"><div class="header">
  <!-- <p>From the fecund brain of Larry Sanger</p> -->
  <h3>Homeschooling</h3>
  <h4>A pair of homeschoolers gets in trouble</h4>
</div><p>Our <u><?php echo $one ?></u> homeschoolers are hard to handle.</p><p><u><?php echo $two ?></u>'s favorite subject is <u><?php echo $three ?></u> while
<u><?php echo $four ?></u>'s is <u><?php echo $five?></u>. The trouble is that
the kids <u><?php echo $six?> </u> whenever they study together. But
this makes Mama very <u><?php echo $seven?></u>, which isn't always a
good thing.</p><p><u><?php echo $two ?></u> and <u><?php echo $four?></u> are good students, but they are bad <u><?php echo $eight?></u>.
As <u><?php echo $eight?></u> they are very <u><?php echo $nine?></u>. But since Mama
<u><?php echo $ten?></u> <u><?php echo $two?></u> and <u><?php echo $four ?></u>, maybe it's OK.</p>
<button class="restart-button waves-effect waves-light btn green" onclick="window.location.href='index.html';>Try another?</button>
</div>


</body></html>
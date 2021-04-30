<!DOCTYPE html>
<html lang="en">
<head>
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

  $eleven=$_GET['eleven'];

  $twelve=$_GET['twelve'];

  $thirteen=$_GET['thirteen'];

  $fourteen=$_GET['fourteen'];

  $fifteen=$_GET['fifteen'];

  $sixteen=$_GET['sixteen'];




?>



<body>
<header class="page-header">
  <span class="logo">Mad Libs!</span></header>
<div class="main"><div class="header">
  <h3>Leavin' on a Jet Plane</h3>
  <h4>Confusion and hilarity at 35,000 feet</h4>
</div>
<p>It was the first time for Mr. <u><?php echo $one?></u> <u><?php echo $two?></u> on an airplane. Mr. <u><?php echo $two?></u> was completely <u><?php echo $thirteen?> </u> and could not stop <u><?php echo $three?> </u> to his seatmate, the <u><?php echo $four ?></u>-year-old Ms. <u><?php echo $five ?> </u>.</p><p>"Oh, I am so <u><?php echo $thirteen ?> </u>, Mrs. <u><?php echo $five ?> </u>. I'm <u><?php echo $six?> </u>, but this is all new to me!"</p><p>"You're <u><?php echo $six ?> </u> indeed! It's 'Ms.', you <u><?php echo $seven?> </u>."</p><p>"Pardon me," Mr. <u><?php echo $two ?></u> said, chuckling. "But did you <u><?php echo $eight?></u> the stewardess? I thought they were supposed to be <u><?php echo $nine?></u> and <u><?php echo $ten?></u>..."</p><p>"Oh <i>please,</i>" Ms. <u><?php echo $five?> </u> said. "You're very <u><?php echo $eleven ?> </u>, aren't you?"</p><p>"And why is everyone <u><?php echo $twelve?></u>?"</p><p>"People do all sorts of things on a plane."</p><p>"Even <u><?php echo  $thirteen?></u>?" whispered Mr. <u><?php echo $two?></u>, jabbing his <u><?php echo $fourteen ?></u> in the direction of some fellow passengers.</p><p>"Well, you know," whispered Ms. <u><?php echo $five?> </u> back, "that's something seatmates often do on planes. We could, you know..."
</p>
<p>Mr. <u><?php echo $two ?></u> gave her a look of <u><?php echo $fifteen ?></u> and was quiet for the rest of the trip.</p>
<button class="restart-button waves-effect waves-light btn green" onclick="window.location.href='index.html';>Try another?</button>
</div>


</body></html>
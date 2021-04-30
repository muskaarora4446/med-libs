<!DOCTYPE html>
<html lang="en"><head>
  <title>Mad Libs!</title>
  <meta charset="utf-8">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  <?php 



session_start();

$noun1=$_GET['noun1'];
$adjective1=$_GET['adjective1'];
$name1=$_GET['name1'];
$number1=$_GET['number1'];
$name2=$_GET['name2'];
$noun2=$_GET['noun2'];
$verb1=$_GET['verb1'];
$noun3=$_GET['noun3'];
$noun4=$_GET['noun4'];
$name3=$_GET['name3'];
$adjective2=$_GET['adjective2'];
$name4=$_GET['name4'];
$adjective3=$_GET['adjective3'];



?>



  <link href="css/custom.css" rel="stylesheet">
</head>
<body>
<header class="page-header">
  <span class="logo">Mad Libs!</span></header>
<div class="main">
  <div class="header">
    <h3>The Latest Hot Startup! </h3>
    <h4>Read about the hotness that is this freakingly cool app!</h4>
  </div><u><?php echo $noun1?></u>, California - The latest in <u><?php echo $adjective1 ?></u> apps has arrived on the scene: <u><?php echo $name1?></u>! Announcing $<u><?php echo $number1?></u> million in funding from <u><?php echo $name2?></u> VenturePartners, <u><?php echo $name1 ?></u> aims to disrupt the <u><?php echo $noun2 ?></u> industry by
<u><?php echo $verb1 ?></u> <u><?php echo $noun3?></u>,
leveraging the latest in <u><?php echo $noun4 ?></u> technology. And it will do it by Q1 of
next year!a<p></p><p>That might sound hard to believe. But <u><?php echo $name3 ?></u>, <u><?php echo $name1?></u>
CEO, says, "We are totally committed to transforming the <u><?php echo $noun2?></u> industry. I
personally have years of experience <u><?php echo $verb1?></u> <u><?php echo $noun3 ?></u>, as do my
co-founders!"</p><p>This is not at all <u><?php echo $adjective1
 ?></u>. <u><?php echo $name1 ?></u> advisor,
Grant Grierson formerly of <u><?php echo $name4 ?></u>, explains:
"The <u><?php echo $name1 ?></u> approach to <u><?php echo $verb1?></u> is unlike anything I've ever seen. It
will change the world. It's <u><?php echo $adjective3?></u>!"
</p>
<button class="restart-button waves-effect waves-light btn green" onclick="window.location.href='index.php';">Try another?</button>
</div>

</body></html>

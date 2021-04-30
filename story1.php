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
session_start();
if(isset($_POST['noun1'])){
  $noun1=$_SESSION['noun1'];
}



if(isset($_POST['adjective1'])){
  $adjective1=$_SESSION['adjective1'];
}

if(isset($_POST['name1'])){
  $name1=$_SESSION['name1'];
}


if(isset($_POST['number1'])){
  $number1=$_SESSION['number1'];
}


if(isset($_POST['name2'])){
  $name2=$_SESSION['name2'];
}


if(isset($_POST['noun2'])){
  $noun2=$_SESSION['noun2'];
}


if(isset($_POST['verb1'])){
  $verb1=$_SESSION['verb1'];
}


if(isset($_POST['noun3'])){
  $noun3=$_SESSION['noun3'];
}


if(isset($_POST['noun4'])){
  $noun4=$_SESSION['noun4'];
}


if(isset($_POST['name3'])){
  $name3=$_SESSION['name3'];
}


if(isset($_POST['adjective2'])){
  $adjective2=$_SESSION['adjective2'];
}


if(isset($_POST['name4'])){
  $name4=$_SESSION['name4'];
}


if(isset($_POST['adjective3'])){
  $adjective3=$_SESSION['adjective3'];
}

?>
<body>
<header class="page-header"><span class="logo">Mad Libs!</span></header>
<div class="main"><div class="header"><h3>The Latest Hot Startup!</h3>
  <h4>Read about the hotness that is this freakingly cool app!</h4>
</div><div class="answers">
  <form action="answer1.php">
  <div>Noun: <input type="text" id="0" placeholder="California city/placename" name = "noun1">
  </div>
  <div>Adjective: <input type="text" id="1" placeholder="tech" name = "adjective1">
  </div>
  <div>Name: <input type="text" id="2" placeholder="domain name" name = "name1">
  </div>
  <div>Number: <input type="text" id="3" placeholder="digits only" name = "number1"> 
  </div><div>Name: <input type="text" id="4" placeholder="last name associated with a VC" name = "name2">
  </div>
  <div>Noun: <input type="text" id="6" placeholder="industry" name = "noun2">
  </div>
  <div>Verb: <input type="text" id="7" placeholder=" (ing) form of verb); transitive, of persons" name = "verb1">
  </div>
  <div>Noun: <input type="text" id="8" placeholder="plural, persons" name = "noun3">
  </div>
  <div>Noun: <input type="text" id="9" placeholder="tech" name = "noun4">
  </div>
  <div>Name: <input type="text" id="10" placeholder="startup CEO name" name = "name3">
  </div>
  <div>Adjective: <input type="text" id="15" placeholder="negative, said of people" name = "adjective2">
  </div>
  <div>Name: <input type="text" id="17" placeholder="big Silicon Valley company" name = "name4">
  </div>
  <div>Adjective: <input type="text" id="20" placeholder="hype" name = "adjective3">
  </div>

 
  </form>
</div>
</div>
<canvas width="0" height="150" style="
    margin-left: 600px;
"><script src="scripts/index.js"></script></canvas>
</body>
</html>
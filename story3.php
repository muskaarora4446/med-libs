<!DOCTYPE html>
<html lang="en"><head>
  <title>Mad Libs!</title>
  <meta charset="utf-8">
  <link href="css/custom.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</head>



<?php 
session_start();

if(isset($_POST['one'])){
  $one=$_SESSION['one'];
}


if(isset($_POST['two'])){
  $two=$_SESSION['two'];
}


if(isset($_POST['three'])){
  $three=$_SESSION['three'];
}


if(isset($_POST['four'])){
  $four=$_SESSION['four'];
}


if(isset($_POST['five'])){
  $five=$_SESSION['five'];
}


if(isset($_POST['six'])){
  $six=$_SESSION['six'];
}


if(isset($_POST['seven'])){
  $seven=$_SESSION['seven'];
}

if(isset($_POST['eight'])){
  $eight=$_SESSION['eight'];
}



if(isset($_POST['nine'])){
  $nine=$_SESSION['nine'];
}

if(isset($_POST['ten'])){
  $ten=$_SESSION['ten'];
}?>
<body>
<header class="page-header"><span class="logo">Mad Libs!</span></header>
<div class="main">
  <div class="header">
    <!-- <p>From the fecund brain of Larry Sanger</p> -->
    <h3>Homeschooling</h3>
    <h4>A pair of homeschoolers gets in trouble</h4>
  </div><div class="answers">
    <form action="answer3.php">
    <div>Adjective: <input type="text" id="0" placeholder="said of kids"  name= "one">
    </div>
    <div>Name: <input type="text" id="1" placeholder="child's name"  name= "two">
    </div>
    <div>Noun: <input type="text" id="2" placeholder="school subject"  name= "three">
    </div>
    <div>Name: <input type="text" id="3" placeholder="child's name"  name= "four">
    </div>
    <div>Noun: <input type="text" id="4" placeholder="another school subject" name= "five">  
    </div>
    <div>Verb: <input type="text" id="5" placeholder="plural present intransitive"  name= "six">
    </div>
    <div>Adjective: <input type="text" id="6" placeholder="describes a person"  name= "seven">
    </div>
    <div>Noun: <input type="text" id="9" placeholder="plural, role/job"  name= "eight">
    </div><div>Adjective: <input type="text" id="11" placeholder="bad in kid way"  name= "nine">
    </div>
    <div>Verb: <input type="text" id="12" placeholder="third person present transitive"  name= "ten">
    </div>
    <!-- <a class="waves-effect waves-light btn green" id="submit">Submit</a> -->
    
    </form>
  </div>
</div>
<canvas width="0" height="150" style="
    margin-left: 600px;
"><script src="scripts/index.js"></script></canvas>

</body></html>
<!DOCTYPE html>
<html lang="en">
<head>
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

if(isset($_POST['eight'])){
  $eight=$_SESSION['eight'];
}



if(isset($_POST['nine'])){
  $nine=$_SESSION['nine'];
}

if(isset($_POST['ten'])){
  $ten=$_SESSION['ten'];
}


if(isset($_POST['eleven'])){
  $eleven=$_SESSION['eleven'];
}


if(isset($_POST['twelve'])){
  $twelve=$_SESSION['twelve'];
}


if(isset($_POST['thirteen'])){
  $thirteen=$_SESSION['thirteen'];
}


if(isset($_POST['fourteen'])){
  $fourteen=$_SESSION['fourteen'];
}


if(isset($_POST['fifteen'])){
  $fifteen=$_SESSION['fifteen'];
}

if(isset($_POST['sixteen'])){
  $sixteen=$_SESSION['sixteen'];
}

}


?>
<body>
<header class="page-header"><span class="logo">Mad Libs!</span></header>
<div class="main"><div class="header">
  <h3>Leavin' on a Jet Plane</h3>
  <h4>Confusion and hilarity at 35,000 feet</h4>
</div>
<div class="answers">
  <form action="answer2.php">
  <div>Name: <input type="text" id="0" placeholder="first name of old person" name = "one">
  </div>
  <div>Name: <input type="text" id="1" placeholder="last name of same old person" name = "two">
  </div>
  <div>Adjective: <input type="text" id="3" placeholder="human emotion" name = "sixteen">
  </div>

  <div>Verb: <input type="text" id="4" placeholder="gerund, synonym of talk + ing" name = "three">
  </div>
  <div>Number: <input type="text" id="5" placeholder="age of an adult" name = "four">
  </div>
  <div>Name: <input type="text" id="6" placeholder="another last name" name = "five">
  </div>
  <div>Adjective: <input type="text" id="9" placeholder="old" name = "six">
  </div>
  <div>Noun: <input type="text" id="11" placeholder="mild insult" name = "seven">
  </div>
  <div>Verb: <input type="text" id="13" placeholder="synonym of 'see', infinitive, transitive" name = "eight">
  </div>
  <div>Adjective: <input type="text" id="14" placeholder="personal quality" name = "nine">
  </div>
  <div>Adjective: <input type="text" id="15" placeholder="good-looking somehow" name = "ten">
  </div>
  <div>Adjective: <input type="text" id="17" placeholder="synonym of old-fashioned" name = "eleven">
  </div>
  <div>Verb: <input type="text" id="18" placeholder="activity of passengers, verb phrase beginning with ing word" name = "twelve">
  </div>
  <div>Verb: <input type="text" id="19" placeholder="infinitive, something shocking two people do" name = "thirteen">
  </div>
  <div>Noun: <input type="text" id="21" placeholder="moveable body part located above the waist" name = "fourteen">
  </div>
  <div>Adjective: <input type="text" id="24" placeholder="reaction visible on the face" name = "fifteen">
  </div>
  <button type = "submit" class="restart-button waves-effect waves-light btn green"> Submit</button>


  <!-- <a class="waves-effect waves-light btn green" id="submit">Submit</a> -->
  </form>
</div>
</div>
</body></html>
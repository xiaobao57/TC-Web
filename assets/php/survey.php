<?php

session_start();
if (!isset($_SESSION["question"])){
		$_SESSION["question"] = 0;
}

$timer = $_COOKIE["timer"];
$question = $_SESSION["question"];
$script = $_SERVER['PHP_SELF'];

print <<<TOP
		<html>
		<head>
TOP;

if($question == 0){
		setcookie ("timer", "true", time()+1200);
		$question++;
		$_SESSION["question"] = $question;
		$script = $_SERVER['PHP_SELF'];
		print <<<QUESTION_ONE
			<title> Question One </title>
			<link rel="stylesheet" href="../bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
			<link rel="stylesheet" href="./main.css" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</head>
			<body style = "padding-top: 50px">
			<!-- remember to change the href's later when you get a server or something -->
			<nav class="navbar navbar-default navbar-fixed-top" style="background-color: RoyalBlue">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			      <a class="navbar-brand" style="color: White" href="HomePage/tcca.html">TCCA Austin</a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li class="dropdown">
			          <a class="dropdown-toggle" data-toggle="dropdown" style="color: White" href="#">About us<span class="caret"></span></a>
			          <ul style="background-color: RoyalBlue" class="dropdown-menu">
			            <li><a href="events.html" style="color: White">Events</a></li>
			            <li><a href="foundation.html" style="color: White">Tzu Chi Foundation</a></li>
			          </ul>
			        </li>
			        <li><a href="contact.html" style="color: White">Contact Us</a></li>
			        <li><a href="email_list.php" style="color: White">Join</a></li>
			        <li><a href="survey.php" style="color: White">Feedback</a></li>

			      </ul>
			    </div>
			  </div>
			</nav>
			<div class = "container">
			<p><i><b>1) </b></i>How satisfied are you with the current TC volunteering events?</p>
			<form method = "post" action = $script>
			<input type = "radio" name = "q1answer" value = "1"> 1 <br>
			<input type = "radio" name = "q1answer" value = "2"> 2 <br>
			<input type = "radio" name = "q1answer" value = "3"> 3 <br>
			<input type = "radio" name = "q1answer" value = "4"> 4 <br>
			<input type = "radio" name = "q1answer" value = "5"> 5 <br>
			<input type = "submit" value = "Submit">
			</form>
			</div>
QUESTION_ONE;
	}
	else if ($timer != "true"){
		session_destroy();
		print <<<OUT_OF_TIME
	<title> Out of Time </title>
			<link rel="stylesheet" href="../bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
			<link rel="stylesheet" href="./main.css" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body style = "padding-top: 50px">
	<!-- remember to change the href's later when you get a server or something -->
			<nav class="navbar navbar-default navbar-fixed-top" style="background-color: RoyalBlue">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			      <a class="navbar-brand" style="color: White" href="HomePage/tcca.html">TCCA Austin</a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li class="dropdown">
			          <a class="dropdown-toggle" data-toggle="dropdown" style="color: White" href="#">About us<span class="caret"></span></a>
			          <ul style="background-color: RoyalBlue" class="dropdown-menu">
			            <li><a href="events.html" style="color: White">Events</a></li>
			            <li><a href="foundation.html" style="color: White">Tzu Chi Foundation</a></li>
			          </ul>
			        </li>
			        <li><a href="contact.html" style="color: White">Contact Us</a></li>
			        <li><a href="email_list.php" style="color: White">Join</a></li>
			        <li><a href="survey.php" style="color: White">Feedback</a></li>

			      </ul>
			    </div>
			  </div>
			</nav>
	<div class = "container">
	<p>Oops, you ran out of time to take our survey! Please try again.</p>
	<form method = "post" action = "survey_homepage.php">
	<input type = "submit" value = "Submit">
	</form>
	</div>
OUT_OF_TIME;
	}
	else if($question == 1){
		$question++;
		$_SESSION["question"] = $question;
		$script = $_SERVER['PHP_SELF'];
		print <<<QUESTION_TWO
			<title> Question Two </title>
			<link rel="stylesheet" href="../bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
			<link rel="stylesheet" href="./main.css" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</head>
			<body style = "padding-top: 50px">
			<!-- remember to change the href's later when you get a server or something -->
			<nav class="navbar navbar-default navbar-fixed-top" style="background-color: RoyalBlue">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			      <a class="navbar-brand" style="color: White" href="HomePage/tcca.html">TCCA Austin</a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li class="dropdown">
			          <a class="dropdown-toggle" data-toggle="dropdown" style="color: White" href="#">About us<span class="caret"></span></a>
			          <ul style="background-color: RoyalBlue" class="dropdown-menu">
			            <li><a href="events.html" style="color: White">Events</a></li>
			            <li><a href="foundation.html" style="color: White">Tzu Chi Foundation</a></li>
			          </ul>
			        </li>
			        <li><a href="contact.html" style="color: White">Contact Us</a></li>
			        <li><a href="email_list.php" style="color: White">Join</a></li>
			        <li><a href="survey.php" style="color: White">Feedback</a></li>

			      </ul>
			    </div>
			  </div>
			</nav>
			<div class = "container">
			<p><i><b>2) </b></i>How satisfied are you with the current TC social events?</p>
			<form method = "post" action = $script>
			<input type = "radio" name = "q2answer" value = "1"> 1 <br>
			<input type = "radio" name = "q2answer" value = "2"> 2 <br>
			<input type = "radio" name = "q2answer" value = "3"> 3 <br>
			<input type = "radio" name = "q2answer" value = "4"> 4 <br>
			<input type = "radio" name = "q2answer" value = "5"> 5 <br>
			<input type = "submit" value = "Submit">
			</form>
			</div>
QUESTION_TWO;
	}
	else if($question == 2){
		$question++;
		$_SESSION["question"] = $question;
		$script = $_SERVER['PHP_SELF'];
		print <<<QUESTION_THREE
			<title> Question Three </title>
			<link rel="stylesheet" href="../bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
			<link rel="stylesheet" href="./main.css" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</head>
			<body style = "padding-top: 50px">
			<!-- remember to change the href's later when you get a server or something -->
			<nav class="navbar navbar-default navbar-fixed-top" style="background-color: RoyalBlue">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			      <a class="navbar-brand" style="color: White" href="HomePage/tcca.html">TCCA Austin</a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li class="dropdown">
			          <a class="dropdown-toggle" data-toggle="dropdown" style="color: White" href="#">About us<span class="caret"></span></a>
			          <ul style="background-color: RoyalBlue" class="dropdown-menu">
			            <li><a href="events.html" style="color: White">Events</a></li>
			            <li><a href="foundation.html" style="color: White">Tzu Chi Foundation</a></li>
			          </ul>
			        </li>
			        <li><a href="contact.html" style="color: White">Contact Us</a></li>
			        <li><a href="email_list.php" style="color: White">Join</a></li>
			        <li><a href="survey.php" style="color: White">Feedback</a></li>

			      </ul>
			    </div>
			  </div>
			</nav>
			<div class = "container">
			<p><i><b>3) </b></i>How engaging is the family system?</p>
			<form method = "post" action = $script>
			<input type = "radio" name = "q3answer" value = "1"> 1 <br>
			<input type = "radio" name = "q3answer" value = "2"> 2 <br>
			<input type = "radio" name = "q3answer" value = "3"> 3 <br>
			<input type = "radio" name = "q3answer" value = "4"> 4 <br>
			<input type = "radio" name = "q3answer" value = "5"> 5 <br>
			<input type = "submit" value = "Submit">
			</form>
			</div>
QUESTION_THREE;
	}
	else if($question == 3){
		$question++;
		$_SESSION["question"] = $question;
		$script = $_SERVER['PHP_SELF'];
		print <<<QUESTION_FOUR
			<title> Question Four </title>
			<link rel="stylesheet" href="../bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
			<link rel="stylesheet" href="./main.css" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</head>
			<body style = "padding-top: 50px">
			<!-- remember to change the href's later when you get a server or something -->
			<nav class="navbar navbar-default navbar-fixed-top" style="background-color: RoyalBlue">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			      <a class="navbar-brand" style="color: White" href="HomePage/tcca.html">TCCA Austin</a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li class="dropdown">
			          <a class="dropdown-toggle" data-toggle="dropdown" style="color: White" href="#">About us<span class="caret"></span></a>
			          <ul style="background-color: RoyalBlue" class="dropdown-menu">
			            <li><a href="events.html" style="color: White">Events</a></li>
			            <li><a href="foundation.html" style="color: White">Tzu Chi Foundation</a></li>
			          </ul>
			        </li>
			        <li><a href="contact.html" style="color: White">Contact Us</a></li>
			        <li><a href="email_list.php" style="color: White">Join</a></li>
			        <li><a href="survey.php" style="color: White">Feedback</a></li>

			      </ul>
			    </div>
			  </div>
			</nav>
			<div class = "container">
			<p><i><b>4) </b></i>What family are you in?</p>
			<form method = "post" action = $script>
			<input type = "radio" name = "q4answer" value = "Fire"> Fire <br>
			<input type = "radio" name = "q4answer" value = "Air"> Air <br>
			<input type = "radio" name = "q4answer" value = "Water"> Water <br>
			<input type = "radio" name = "q4answer" value = "Earth"> Earth <br>
			<input type = "radio" name = "q4answer" value = "Metal"> Metal <br>
			<input type = "submit" value = "Submit">
			</form>
			</div>
QUESTION_FOUR;
	}
	else if($question == 4){
		$question++;
		$_SESSION["question"] = $question;
		$script = $_SERVER['PHP_SELF'];
		print <<<QUESTION_FIVE
			<title> Question Five </title>
			<link rel="stylesheet" href="../bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
			<link rel="stylesheet" href="./main.css" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</head>
			<body style = "padding-top: 50px">
			<!-- remember to change the href's later when you get a server or something -->
			<nav class="navbar navbar-default navbar-fixed-top" style="background-color: RoyalBlue">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			      <a class="navbar-brand" style="color: White" href="HomePage/tcca.html">TCCA Austin</a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li class="dropdown">
			          <a class="dropdown-toggle" data-toggle="dropdown" style="color: White" href="#">About us<span class="caret"></span></a>
			          <ul style="background-color: RoyalBlue" class="dropdown-menu">
			            <li><a href="events.html" style="color: White">Events</a></li>
			            <li><a href="foundation.html" style="color: White">Tzu Chi Foundation</a></li>
			          </ul>
			        </li>
			        <li><a href="contact.html" style="color: White">Contact Us</a></li>
			        <li><a href="email_list.php" style="color: White">Join</a></li>
			        <li><a href="survey.php" style="color: White">Feedback</a></li>

			      </ul>
			    </div>
			  </div>
			</nav>
			<div class = "container">
			<p><i><b>5) </b></i> Extra comments: </p>
			<form method = "post" action = $script>
			<input style = "width: 400px; height: 300px" type = "text" name = "q5answer"><br>
			<input type = "submit" value = "Submit">
			</form>
			</div>
QUESTION_FIVE;
	}
	else if($question == 5){
		$script = $_SERVER['PHP_SELF'];
		print <<<THANKYOU_PAGE
			<title> Thank You </title>
			<link rel="stylesheet" href="../bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
			<link rel="stylesheet" href="./main.css" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</head>
			<body style = "padding-top: 50px">
			<!-- remember to change the href's later when you get a server or something -->
			<nav class="navbar navbar-default navbar-fixed-top" style="background-color: RoyalBlue">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			      <a class="navbar-brand" style="color: White" href="HomePage/tcca.html">TCCA Austin</a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li class="dropdown">
			          <a class="dropdown-toggle" data-toggle="dropdown" style="color: White" href="#">About us<span class="caret"></span></a>
			          <ul style="background-color: RoyalBlue" class="dropdown-menu">
			            <li><a href="events.html" style="color: White">Events</a></li>
			            <li><a href="foundation.html" style="color: White">Tzu Chi Foundation</a></li>
			          </ul>
			        </li>
			        <li><a href="contact.html" style="color: White">Contact Us</a></li>
			        <li><a href="email_list.php" style="color: White">Join</a></li>
			        <li><a href="survey.php" style="color: White">Feedback</a></li>

			      </ul>
			    </div>
			  </div>
			</nav>
			<div class = "container">
			<p>Thank you for your response!</p>
			<form method = "post" action = "survey_homepage.php">
			<input type = "submit" value = "Return">
			</form>
			</div>
THANKYOU_PAGE;
		$f = fopen("results.txt", "a+");
		fwrite($f, "$user:$score\n");
		fclose($f);
		session_destroy();
	}
else{
	print <<<OUT_OF_TIME
	<title> Out of Time </title>
	</head>
	<body>
	<p>Oops, you ran out of time to take our survey! Please try again.</p>
	<form method = "post" action = "survey_homepage.php">
	<input type = "submit" value = "Return">
	</form>
OUT_OF_TIME;
}

	print <<<BOTTOM
	</body>
	</html>
BOTTOM;
?>
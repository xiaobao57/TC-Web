<?php
print <<<FEEDBACK
<html>
<head>
<title> Survey Homepage </title>
<link rel="stylesheet" href="../bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="./main.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style = "padding-top: 50px;">
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
	          <a class="dropdown-toggle" data-toggle="dropdown" style="color: White" href="HomePage/tcca.html">About us<span class="caret"></span></a>
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
	<p>To improve our service and community, we are always looking to our members for their opinions on how we've been doing and where they see room for improvement. If you'd like to share your opinion, hit the button below to get started!</p>

	<form action = "survey.php">
		<input type = "submit" value = "Start survey">
	</form>
</div>
</body>
</html>
FEEDBACK;
?>
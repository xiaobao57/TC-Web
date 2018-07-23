<?php
session_start();

if(isset($_POST['insert'])){
	insert();
}
else if(isset($_POST['show'])){
  showTable();
  printForm();
}
else{
	printForm();
}

// EMAILFORM also contains the front-end JS validation for missing information and AJAX code in its script tag.
function printForm(){
	print <<<EMAILFORM
	<?xml version = "1.0" ?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title> E-mail </title>
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type = "text/javascript">
    function validate(){
      var elt = document.getElementById("emailForm");
      var first = elt.first.value;
      var last = elt.last.value;
      var email = elt.email.value;

      if (first == "" ||
        first == null ||
        last == "" ||
        last == null ||
        email == "" ||
        email == null)
      {
        return false;
      }
      return true;
    }

    function missingAlert(){
    	if (validate() == false){
    		window.alert("Missing information, did not submit");
    		return false;
    	}
    	return false;
    }
    </script>

    <script type = "text/javascript">
    var xhr = new XMLHttpRequest();

    if (window.ActiveXObject)
    {
      xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    else if (window.XMLHttpRequest)
    {
      xhr = new XMLHttpRequest();
    }

    function callServer()
    {
      // Create the phone number
      var elt = document.getElementById("emailForm");
      var email = elt.email.value;

      // Build the URL to connect to
      var url = "/verify.php?email=" +escape(email);

      // Open a connection to the server
      xhr.open("GET", url, true);

      // Setup a function for the server to run when it is done
      xhr.onreadystatechange = updatePage;

      // Send the request
      xhr.send(null);
    }

    function updatePage(){
      if (validate() == false){
        window.alert("Remember to fill out missing information");
      }
    }
    </script>
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

    <h1>E-mail:</h1>
    <form method = "post" id = "emailForm" action = "$script" onsubmit = "return missingAlert()">
      <table>
        <tr>
        <td><p><b>First: </b></p></td>
        <td><p><b>Last: </b></p></td>
        </tr>
        <tr>
        <td><input type = "text" name = "first" size = "20" maxlength = "20"></td>
        <td><input type = "text" name = "last" size = "20" maxlength = "20"></td>
        </tr>
        <tr>
        <td><p><b>Email</b></p></td>
        </tr>
        <tr>
        <td><input type = "text" name = "email" size = "40" maxlength = "40" onchange = "callServer();" ></td>
        </tr>
        <tr>
        <td><input type = "submit" name = "insert" value = "Submit"></td>
        </tr>
      </table>
    </form>
    <form method = "post">
    <input type="submit" name = "show" value="Show table of emails">
    </form>
    </body>
</html>
EMAILFORM;
}

// Inserts first name, last name, and email into the database "TCemails". Also includes two checks for complete information and if email is already in the database.
function insert(){
	// Connect to the MySQL database
	$host = "summer-2017.cs.utexas.edu";
	$user = "blx57";
	$pwd = "pT+Z5rLIWZ";
	$dbs = "cs329e_mitra_blx57";
	$port = "3306";

	$connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);

	if (empty($connect))
	{
	  die("mysqli_connect failed: " . mysqli_connect_error());
	}

	// Get values from Input form
	$first = $_POST["first"];
	$last = $_POST["last"];
	$email = $_POST["email"];
	$table = "TCemails";

	// Check if all fields are filled out
	if ($first== '' || $last== '' || $email== ''){
		print <<<EMAILFAIL
	  <html>
	  <head>
	  <title> E-mail </title>
	  </head>
	  <body>
	  <h1>Missing information</h1>
	  <form method = "post" action = "email_list.php">
	  	<input type = "submit" value = "Return">
	  </form>
	  </body>
	  </html>
EMAILFAIL;
		return;
	}
	
	// Check if Email is unique
	$result = mysqli_query($connect, "SELECT email from $table WHERE email = '".$email."'");
	while ($row = $result->fetch_row())
	{
	print <<<EMAILFAIL
	  <html>
	  <head>
	  <title> E-mail </title>
	  </head>
	  <body>
	  <h1>Email already exists!</h1>
	  <form method = "post" action = "email_list.php">
	  	<input type = "submit" value = "Return">
	  </form>
	  </body>
	  </html>
EMAILFAIL;
		if($row != []){
			return;
		}
	}
	$result -> free();

	// Insert form data into the table
	$stmt = mysqli_prepare ($connect, "INSERT INTO $table (first, last, email) VALUES (?, ?, ?)");
	mysqli_stmt_bind_param ($stmt, 'sss', $first, $last, $email);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	print <<<EMAILSUCCESS
	  <html>
	  <head>
	  <title> E-mail </title>
	  </head>
	  <body>
	  <h1>Insert successful!</h1>
	  <form method = "post" action = "email_list.php">
	  	<input type = "submit" value = "Return">
	  </form>
	  </body>
	  </html>
EMAILSUCCESS;

	$connect->close();
}

function showTable(){
print <<<TOP
<html>
<head>
<title> Database Access </title>
</head>
<body>
<h3> Database Access </h3>
<table style="padding: 5px; border: 1px solid;">
TOP;

// Connect to the MySQL database
$host = "summer-2017.cs.utexas.edu";
$user = "blx57";
$pwd = "pT+Z5rLIWZ";
$dbs = "cs329e_mitra_blx57";
$port = "3306";

$connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);

if (empty($connect))
{
  die("mysqli_connect failed: " . mysqli_connect_error());
}

print "Connected to ". mysqli_get_host_info($connect) . "<br /><br />\n";

// Get data from a table in the database and print it out

$table = "TCemails";
$result = mysqli_query($connect, "SELECT * from $table");
while ($row = $result->fetch_row())
{
  print   "<tr>
       <td>First " . $row[0] .
       "</td><td>Last " . $row[1] .
       "</td><td>Email " . $row[2] .
       "</td>";
}

$result->free();

// Close connection to the database
mysqli_close($connect);

print <<<BOTTOM
</table>
</body>
</html>
BOTTOM;
}

?>
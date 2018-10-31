<!-- I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Justin Blackford -->

<html>
<head>
<title>Welcome to my Store</title>
<?php 
session_start();
require("library.php");
#sql credantials
$user = "jblackford3";
$con = mysqli_connect("localhost",$user,$user,$user);
if (mysqli_connect_errno()) {
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}

# handle create login
if (isset ($_POST['option'])) {
	$option = $_POST['option'];
   if ($option == 'Create') {
      $UserEmail = $_POST['UserEmail'];
      $crypted = crypt($_POST['password']);
      $sql = "INSERT INTO Users SET UserEmail='" . sanStr($UserEmail) . "', " . "UserPassword='" . sanStr($crypted) . "';" ;
    mysqli_query($con, $sql);
    echo "account created";
   }
 	 else if ($option == 'Login') {
      $UserEmail = $_POST['UserEmail'];
      $sql = "SELECT * FROM Users WHERE UserEmail = '". sanStr($UserEmail) ."';";
    	echo $sql;
    	$result = $con->query($sql);

    	if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $crypted = $row['UserPassword'];
        $testing = crypt($_POST['password'], $crypted);
        if ($testing == $crypted) {
        echo "Valid login";
        //redirect
        $_SESSION['login'] = 'regular';
      	header('Location: landing.php');
        }
        else {
        echo "Invalid login";
        }
    }
   }
   else {
      echo("There was an Error");
   }
}

?>

<!-- HTML -->

</head>
<body>
<p> This is the welcome page! </p> <br />

Create a new account or log in with an existing email and password
<form method='POST'>
<input type='UserEmail' name='UserEmail'>
<input type='password' name='password'>
<input type='submit' name='option' value='Create'>
<input type='submit' name='option' value='Login'>
</form>

</body>
</html>
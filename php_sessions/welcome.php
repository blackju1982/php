<!-- I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Justin Blackford -->

<html>
<head>
<title>Welcome to my Store</title>
<?php 
session_start();


# handle regular login
if (isset ($_POST['password'])) {
   if ($_POST['password'] == 'password') {
      $_SESSION['login'] = 'regular';
      header('Location: landing.php');
   }
   else {
      echo ("Invalid username or password");
   }
}

?>

</head>
<body>
<p> This is the welcome page! </p> <br />

REGULAR LOGIN: (Use 'password' as the password)
<form method='POST'>
<input type='password' name='password'>
<input type='submit' >
</form>

</body>
</html>
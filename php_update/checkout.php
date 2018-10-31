<!-- I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Justin Blackford -->


<html>
<head>
<title>Cart</title>
<?php
require("library.php"); /// for every  file
start_up();             /// bounce on invalid requests

#sql credantials
$user = "jblackford3";
$con = mysqli_connect("localhost",$user,$user,$user);
if (mysqli_connect_errno()) {
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}

if (isset ($_POST['option'])) {
	$option = $_POST['option'];
	$sql = "INSERT INTO Orders SET ";
   if ($option == 'Order') {
   		if ( isset($_SESSION['toaster']) ) {
      		$sql = $sql . "toaster='" . $_SESSION['toaster'];
      }
      if ( isset($_SESSION['doughnut']) ) {
      		$sql = $sql . "', " . "doughnut='" . $_SESSION['doughnut'];
      }
      if ( isset($_SESSION['doughnut_hole']) ) {
      		$sql = $sql . "', " . "doughnut_hole='" . $_SESSION['doughnut_hole'];
      }
      if ( isset($_SESSION['glue']) ) {
      		$sql = $sql . "', " . "glue ='" . $_SESSION['glue'];
      }
    $sql = $sql . "';" ;
    mysqli_query($con, $sql);
    echo $sql;
   }
}
?>

</head>
<body>
<?php display_header() ?>

<h1> You have the following in your cart: </h1>

<?php print_qty(); ?>

<form method='POST'>
<input type='submit' name='option' value='Order'>
</form>

<?php displayOrders($con); ?>
<?php display_footer(); ?>
</body>
</html>
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
      		$sql = $sql . "toaster='" . sanStr($_SESSION['toaster']);
      }
      else {
        $sql = $sql . "toaster='0";
      }
      if ( isset($_SESSION['doughnut']) ) {
      		$sql = $sql . "', " . "doughnut='" . sanStr($_SESSION['doughnut']);
      }
      else {
        $sql = $sql . "', " . "doughnut='0";
      }
      if ( isset($_SESSION['doughnut_hole']) ) {
      		$sql = $sql . "', " . "doughnut_hole='" . sanStr($_SESSION['doughnut_hole']);
      }
      else {
        $sql = $sql . "', " . "doughnut_hole='0";
      }
      if ( isset($_SESSION['glue']) ) {
      		$sql = $sql . "', " . "glue ='" . sanStr($_SESSION['glue']);
      }
      else {
        $sql = $sql . "', " . "glue='0";
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
<!-- I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Justin Blackford -->


<html>
<head>
<title>Items Update</title>
<?php
require("library.php"); /// for every  file
start_up();             /// bounce on invalid requests

#sql credantials
$user = "jblackford3";
$con = mysqli_connect("localhost",$user,$user,$user);
if (mysqli_connect_errno()) {
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}


$randomItem = "";
$ID = "";

if ( isset($_POST['option']) ) {
    if ($_POST['option'] == 'Edit' || $_POST['option'] == 'Reset') {
    $sql = "SELECT * FROM Itemsupdate WHERE ID ='" . $_POST['ID'] . "';";
    $result = $con->query($sql);

    if ($result->num_rows  == 1) {
        $row = $result->fetch_assoc();
        $randomItem = $row['randomItem'];
        $ID = $row['ID'];
    }
    }
    else if ($_POST['option'] == 'Cancel') {
    header('Location: insert.php');
    }
    else if ($_POST['option'] == 'Update') {
    $sql = "UPDATE Itemsupdate SET " . "randomItem = '" . sanStr($_POST['randomItem'])   . "' " . "WHERE ID = " . $_POST['ID'] . "; " ;
    echo $sql;
    mysqli_query($con, $sql);
    header('Location: insert.php');
    }
}
?>

</head>
<body>
<?php display_header() ?>

<h1> You have the following to Update: </h1>
<form method='POST'>
ID: <?php echo $ID;?> <input type='hidden' name='ID' value='<?php echo $ID;?>'/>
Item Name: <input type='text' name='randomItem' value='<?php echo $randomItem;?>'/>
<input type='submit' name='option' value='Cancel' />
<input type='submit' name='option' value='Reset' />
<input type='submit' name='option' value='Update' />
</form>

<!-- <?php printTable(); ?> -->

<?php display_footer(); ?>
</body>
</html>
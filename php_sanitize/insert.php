<!-- I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Justin Blackford -->


<html>
<head>
<title>Items</title>
<?php
require("library.php"); /// for every  file
start_up();             /// bounce on invalid requests

#sql credantials
$user = "jblackford3";
$con = mysqli_connect("localhost",$user,$user,$user);
if (mysqli_connect_errno()) {
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}

function printTable() {
    global $con;

    $sql = "SELECT * FROM Itemsupdate";
    $result = $con->query($sql);
    // echo $sql . " ";

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<form action='update.php' method='POST'>";
        echo "<input type='image' src='edit.jpg' height='12'>";
        echo "<input type='hidden' name='option' value='Edit'>";
        echo "<input type='hidden' name='ID' value = '" . $row["ID"] . "' /> "; 
        echo "Item number: " . $row["ID"] . ' ';
        echo "Item Name: " . $row["randomItem"] . "<br>";
        echo "</form>";
    }
    } else {
    echo "0 results";
    }
}

// if ( isset($_POST['option']) ) {
//     if ($_POST['option'] == 'Add New Record') {
//     $sql = "INSERT INTO Itemsupdate SET " . "randomItem = '" . sanStr($_POST['randomItem']); . "';" ;
//                // echo $sql;
//     mysqli_query($con, $sql);
//     }
// }

if ( isset($_POST['option']) ) {
    if ($_POST['option'] == 'Add New Record') {
        $sql = "INSERT INTO Itemsupdate SET " . "randomItem = ? ;" ;
        // echo $sql;

        $stmt = mysqli_prepare($con, $sql);
        $stmt->bind_param("s", sanStr($_POST['randomItem']));
        $stmt->execute();

    mysqli_query($con, $sql);
    }
}
?>

</head>
<body>
<?php display_header() ?>

<h1> You may Insert new Records here and Edit Existing Records: </h1>

<form method='POST'>
Item Name: <input type='text' name='randomItem' />
<input type='submit' name='option' value='Add New Record' />
</form>

<?php printTable(); ?>

<?php display_footer(); ?>
</body>
</html>
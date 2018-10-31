<!-- I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Justin Blackford -->

<?php

// called by each file requiring login
function start_up() {
   session_start(); 
   if (!(isset ($_SESSION['login']) )) {    // if login isn't set, it's not value
      header('Location: welcome.php');      // bounce to welcome
   }
}

function display_header() {
    echo "<center>";
    echo "<a href='toaster.php'> Toaster </a>";
    echo "&nbsp;|&nbsp;";
    echo "<a href='doughnut.php'> Doughnut </a>";
    echo "&nbsp;|&nbsp;";
    echo "<a href='doughnut_hole.php'> Doughnut Hole </a>";
    echo "&nbsp;|&nbsp;";
    echo "<a href='glue.php'> Glue </a>";
    echo "&nbsp;|&nbsp;";
    echo "<a href='insert.php'> Insert Record </a>";
    echo "&nbsp;|&nbsp;";
    echo "<a href='checkout.php'> Check Out </a>";
    echo "&nbsp;|&nbsp;";
    echo "<a href='logout.php'> logout </a>";
    echo "</center>";
}

function display_footer() {
    echo "<center>";
    echo "<a href='https://www.parkland.edu/'> Parkland </a>";
    echo "&nbsp;|&nbsp;";
    echo "<a href='http://www.csit.parkland.edu/~jblackford3/csc155-cgi/php_sessions/'> Home </a>";
    echo "</center>";
}

function logout() {
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['toaster']);
    unset($_SESSION['doughnut']);
    unset($_SESSION['doughnut_hole']);
    unset($_SESSION['glue']);
    header('Location: welcome.php');      // bounce to welcome
}

function print_qty() {
	if ( isset($_SESSION['toaster']) ) {
		echo "toasters: " . $_SESSION['toaster'];
		echo "<br />";
	}
	if ( isset($_SESSION['doughnut']) ) {
		echo "doughnuts: " . $_SESSION['doughnut'];
		echo "<br />";
	}
	if ( isset($_SESSION['doughnut_hole']) ) {
		echo "doughnut holes: " . $_SESSION['doughnut_hole'];
		echo "<br />";
	}
	if ( isset($_SESSION['glue']) ) {
		echo "glue: " . $_SESSION['glue'];
		echo "<br />";
	}
}

function showValue( $str ) {
    if ($str == "toaster") {
      $toaster = "";
      if (isset( $_POST['toaster']) ) {
        $toaster = $_POST['toaster'];
      }
      echo $toaster;
		}
		if ($str == "doughnut") {
      $doughnut = "";
      if (isset( $_POST['doughnut']) ) {
        $doughnut = $_POST['doughnut'];
      }
      echo $doughnut;
		}
		if ($str == "doughnut_hole") {
      $doughnut_hole = "";
      if (isset( $_POST['doughnut_hole']) ) {
        $doughnut_hole = $_POST['doughnut_hole'];
      }
      echo $doughnut_hole;
		}
		if ($str == "glue") {
      $glue = "";
      if (isset( $_POST['glue']) ) {
        $glue = $_POST['glue'];
      }
      echo $glue;
		}
}

function displayOrders($con) {
    $sql = "SELECT * FROM Orders";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
            echo $row["toaster"] . " Toaster(s), " . $row["doughnut"] . " Doughnut(s), " . $row["doughnut_hole"] . " Doughnut Hole(s), " . $row["glue"] . " Glue(s), " . "<br>";
    }
    } else {
    echo "0 results";
    }
}
?>
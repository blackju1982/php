<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Justin Blackford -->


<html>
<head>
<title>WebTales</title>

<?php

function showValue( $str ) {
    if ($str == "blankOne") {
      $blankOne = "";
      if ( isset( $_POST['blankOne'] ) ) {
        $blankOne = $_POST['blankOne'];
      }
      echo $blankOne;
    }
    if ($str == "blankTwo") {
      $blankTwo = "";
      if ( isset($_POST['blankTwo']) ) {
        $blankTwo = $_POST['blankTwo'];
      }
      echo $blankTwo;
    }
    if ($str == "blankThree") {
      $blankThree = "";
      if ( isset($_POST['blankThree']) ) {
        $blankThree = $_POST['blankThree'];
      }
      echo $blankThree;
    }
    if ($str == "blankFour") {
      $blankFour = "";
      if ( isset($_POST['blankFour']) ) {
        $blankFour = $_POST['blankFour'];
      }
      echo $blankFour;
    }
    if ($str == "blankFive") {
      $blankFive = "";
      if ( isset($_POST['blankFive']) ) {
        $blankFive = $_POST['blankFive'];
      }
      echo $blankFive;
    }
    if ($str == "blankSix") {
      $blankSix = "";
      if ( isset($_POST['blankSix']) ) {
        $blankSix = $_POST['blankSix'];
      }
      echo $blankSix;
    }
    if ($str == "blankSeven") {
      $blankSeven = "";
      if ( isset($_POST['blankSeven']) ) {
        $blankSeven = $_POST['blankSeven'];
      }
      echo $blankSeven;
    }
    if ($str == "blankEight") {
      $blankEight = "";
      if ( isset($_POST['blankEight']) ) {
        $blankEight = $_POST['blankEight'];
      }
      echo $blankEight;
    }
    if ($str == "blankNine") {
      $blankNine = "";
      if ( isset($_POST['blankNine']) ) {
        $blankNine = $_POST['blankNine'];
      }
      echo $blankNine;
    }
    if ($str == "blankTen") {
      $blankTen = "";
      if ( isset($_POST['blankTen']) ) {
        $blankTen = $_POST['blankTen'];
      }
      echo $blankTen;
    }
}

function printTale() {
    $blankOne = "";
    $blankTwo = "";
    $blankThree = "";
    $blankFour = "";
    $blankFive = "";
    $blankSix = "";
    $blankSeven = "";
    $blankEight = "";
    $blankNine = "";
    $blankTen = "";
    if ( isset( $_POST['blankOne'] ) ) {
      $blankOne = $_POST['blankOne'];
    }
    if ( isset($_POST['blankTwo']) ) {
      $blankTwo = $_POST['blankTwo'];
    }
    if ( isset($_POST['blankThree']) ) {
      $blankThree = $_POST['blankThree'];
    }
    if ( isset($_POST['blankFour']) ) {
      $blankFour = $_POST['blankFour'];
    }
    if ( isset($_POST['blankFive']) ) {
      $blankFive = $_POST['blankFive'];
    }
    if ( isset($_POST['blankSix']) ) {
      $blankSix = $_POST['blankSix'];
    }
    if ( isset($_POST['blankSeven']) ) {
      $blankSeven = $_POST['blankSeven'];
    }
    if ( isset($_POST['blankEight']) ) {
      $blankEight = $_POST['blankEight'];
    }
    if ( isset($_POST['blankNine']) ) {
      $blankNine = $_POST['blankNine'];
    }
    if ( isset($_POST['blankTen']) ) {
      $blankTen = $_POST['blankTen'];
    }

    // print webtale

    // echo $blankOne . $blankTwo . $blankThree . $blankFour . $blankFive . $blankSix . $blankSeven . $blankEight . $blankNine . $blankTen;

    echo  " $blankOne through the woods
    In a one-$blankTwo open $blankThree, 
    Over the fields we go, 
    $blankFour all the way.
    $blankFive on bob-tail ring, 
    Making spirits bright, 
    What fun it is to $blankSix and $blankSeven
    A sleighing song tonight!

    Jingle $blankEight, jingle $blankEight,
    Jingle all the way! 
    O what fun it is to $blankNine
    In a one-$blankTwo open $blankThree. 
    $blankTen!

    Jingle $blankEight, jingle $blankEight,
    Jingle all the way! 
    $blankTen what fun it is to $blankNine
    In a one-$blankTwo open $blankThree. "
    ;
}

?>

</head>

<body>

<table bgcolor='antiquewhite' align='center' cellpadding='2' cellspacing='2'>
<form method='POST'>
<tr>
  <td align='right'>verb ending with -ing:</td>
  <td><input type='text' name='blankOne' value='<?php showValue("blankOne"); ?>' /></td>
</tr>
<tr>
  <td align='right'>animal (singular):</td>
  <td><input type='text' name='blankTwo' value='<?php showValue("blankTwo"); ?>' /></td>
</tr>
<tr>
<tr>
  <td align='right'>vehicle (singular):</td>
  <td><input type='text' name='blankThree' value='<?php showValue("blankThree"); ?>' /></td>
</tr>
<tr>
  <td align='right'>verb ending with -ing:</td>
  <td><input type='text' name='blankFour' value='<?php showValue("blankFour"); ?>' /></td>
</tr>
<tr>
  <td align='right'>one-syllable plural noun:</td>
  <td><input type='text' name='blankFive' value='<?php showValue("blankFive"); ?>' /></td>
</tr>
<tr>
  <td align='right'>present tense verb:</td>
  <td><input type='text' name='blankSix' value='<?php showValue("blankSix"); ?>' /></td>
</tr>
<tr>
  <td align='right'>present tense verb:</td>
  <td><input type='text' name='blankSeven' value='<?php showValue("blankSeven"); ?>' /></td>
</tr>
<tr>
  <td align='right'>one-syllable plural noun:</td>
  <td><input type='text' name='blankEight' value='<?php showValue("blankEight"); ?>' /></td>
</tr>
<tr>
  <td align='right'>present tense verb:</td>
  <td><input type='text' name='blankNine' value='<?php showValue("blankNine"); ?>' /></td>
</tr>
<tr>
  <td align='right'>one-syllable exclamation:</td>
  <td><input type='text' name='blankTen' value='<?php showValue("blankTen"); ?>' /></td>
</tr>
<tr>
  <td align='center' colspan='2'><input type='submit' name='selection' value='Show Tale'/></td>
</tr>
<tr>


</form>
</table>

<?php     
if ( isset($_POST['selection']) ) {
    if ($_POST['selection'] == "Show Tale") {
?>

      <?php printTale(); ?>

<?php
    }
}
?>

</body>
</html>

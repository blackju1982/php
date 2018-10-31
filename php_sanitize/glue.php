<!-- I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Justin Blackford -->


<html>
<head>
<title>Would You Like Glue</title>
<?php
require("library.php"); /// for every  file
start_up();             /// bounce on invalid requests
?>

</head>
<body>
<?php display_header() ?>

<h1> Welcome to the Glue page </h1>

<table bgcolor='antiquewhite' align='center' cellpadding='2' cellspacing='2'>
<form method='POST'>
<tr>
  <td align='right'>How much glue would you like:</td>
  <td><input type='text' name='glue' value='<?php showValue("glue"); ?>' /></td>
</tr>
<tr>
  <td align='center' colspan='2'><input type='submit' name='selection' value='add value'/></td>
</tr>

</form>
</table>

<?php     
if ( isset($_POST['selection']) ) {
    if ($_POST['selection'] == "add value") {
    	$_SESSION['glue'] = $_POST['glue'];
    }
}
?>

<?php display_footer(); ?>
</body>
</html>
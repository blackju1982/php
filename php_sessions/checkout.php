<!-- I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Justin Blackford -->


<html>
<head>
<title>Cart</title>
<?php
require("library.php"); /// for every  file
start_up();             /// bounce on invalid requests
?>

</head>
<body>
<?php display_header() ?>

<h1> You have the following in your cart: </h1>

<?php print_qty(); ?>


<?php display_footer(); ?>
</body>
</html>
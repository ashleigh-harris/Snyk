<?php

$mySanitiser = new MySanitiser();

$myString = $mySanitiser->sanitise("Hello World");

?>

<p><?php echo $myString; ?></p>
<?php

$mySuperAwesomeClass = new MyClass($_GET["u"]);

?>

<h1>Hello <?php echo $mySuperAwesomeClass->getUserName(); ?></h1>
<?php
session start();
session unset();session destroy();
$_SESSION = array();
// Redirect to login page
header("location: index.php");
exit;
?>

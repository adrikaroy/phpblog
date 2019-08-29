<?php include 'db.php';

session_start();
session_unset();
session_destroy();
header("Location: http://localhost/blog/index.php"); 

?>
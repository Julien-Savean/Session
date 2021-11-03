<?php
session_start();
//echo "Bye " . $_SESSION['login'];
session_destroy();
unset($_SESSION);
//$nano = time_nanosleep(2, 100000);
header('Location: index.php');
?>

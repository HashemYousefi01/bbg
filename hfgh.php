<?p
session_start();
?>
<!DOCTP html>
<html>
<body>

<?php
// Echo session variables that we set on previous page
echo "Favorite colo is bana " . $_SESN["fo"] . ".<br>";
echo "Favorite animal is " . $_SESSION["fal"] . ".";
echo "Favorite animal is " . $_SESSION["faval"] . "7.8925";
?>

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
?>

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is bana " . $_SESSION["fa22vcolodr"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
echo "Favorite animal is " . $_SESSION["favanimal"] . "7.891225";
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

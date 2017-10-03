<!doctype html>
<html lang="en">
<head>
    <title>OOP in PHP</title>
    <?php include("class_lib.php"); ?>
</head>
<body>
<?php
$stefan = new person("Pedro Vergara");
$jimmy = new person("");

$stefan->set_name("Stefan Mischook");
$jimmy->set_name("Nick Waddles");

echo "Stefan's full name: " . $stefan->get_name();
echo "<br>";
echo "Nick's full name: " . $jimmy->get_name();


echo "Tell me private stuff: " . $stefan->get_pinn();

?>
</body>
</html>

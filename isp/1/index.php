<?php
include_once("Kubus.php");
include_once("Persegi.php");

$kubus = new Kubus();
$persegi = new Persegi();

echo "Menghitung volume kubus:\n";
$kubus->calculateVolume();

echo "\n";

echo "Menghitung luas persegi:\n";
$persegi->calculateArea();
?>

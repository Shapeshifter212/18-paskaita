<?php 
include "Car.php";

$igno_automobilis = new Car("TYT 080", "Ignas");

$igno_automobilis->color = "red";
$igno_automobilis->make = "Toyota";
$igno_automobilis->model = "Yaris";
$igno_automobilis->fuel = "diesel";
$igno_automobilis->license = "TYT 080";

//var_dump($igno_automobilis);

//echo $igno_automobilis->license;

$marytes_automobilis = new Car("KRW 080", "Karbauskis");

$marytes_automobilis->color = "pink";
$marytes_automobilis->make = "Mercedes";
$marytes_automobilis->model = "SLK";
$marytes_automobilis->fuel = "petrol";
$marytes_automobilis->license = "KRW 001";

$igno_automobilis->go();
$igno_automobilis->crash();
$igno_automobilis->repair();

echo $igno_automobilis->license;
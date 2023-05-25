<?php



require_once "Rectangle.php";
require_once "Triangle.php";
require_once "Cercle.php";
require_once "Sphere.php";
require_once "Pyramide.php";
require_once "Pave.php";

$rectangle = new Rectangle(10, 20);
$rectangle->afficherRectangle();
echo "<br>";
$triangle = new Triangle(10, 20, 30);
$triangle->afficherTriangle();
echo "<br>";
$cercle = new Cercle(10);
$cercle->afficherCercle();
echo "<br>";


$pave = new Pave(30, 40, 50);
$pave->afficherPave();
echo "<br>";

$pyramide = new Pyramide(10, 20, 30);   
$pyramide->afficherPyramide();
echo "<br>";
 
$sphere = new Sphere(5);
$sphere->afficherSphere();











?>
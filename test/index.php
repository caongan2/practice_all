<?php
include_once "Rectangle.php";
$width = 10;
$height =20;
$rectangle = new Rectangle($width, $height);


echo $rectangle->getArea();
echo "<br>";
echo $rectangle->getArea();
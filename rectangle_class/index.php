<?php
include_once "rectangle.php";

$width = 10;
$height = 20;
$rectangle = new rectangle($width, $height);

echo $rectangle->width;
echo "<br>";
echo $rectangle->height;
echo "<br>";
echo $rectangle->getArea();
echo "<br>";
echo $rectangle->getPerimeter();
echo '<br>';
echo $rectangle->display();
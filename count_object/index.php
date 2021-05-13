<?php
include_once "Application.php";
$app1 = new Application("App1");
echo "total ob count: " . Application::$count. "<br>";

$app2 = new Application("App2");
echo "total ob count: " . Application::$count. "<br>";

$app3 = new Application("App3");
echo "total ob count: " . Application::$count. "<br>";

$app4 = new Application("App4");
echo "total ob count: " . Application::$count. "<br>";

$app5 = new Application("App1");
echo "total ob count: " . Application::$count. "<br>";

$app6 = new Application("App5");
echo "total ob count: " . Application::$count. "<br>";

$app7 = new Application("App6");

echo "total ob count: " . Application::$count. "<br>";
echo $app1 . "<br>";
echo $app1 . "<br>";
echo $app1 . "<br>";
echo $app1 . "<br>";
echo $app1 . "<br>";
echo $app1 . "<br>";
echo $app1 . "<br>";
echo $app1 . "<br>";
echo $app1 . "<br>";

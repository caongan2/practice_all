<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager ->add(new Product("Laptop: ", "1 tỏi"));
$productManager -> add(new Product("Mobile: ", ));
$productManager ->add(new Product("Khoai", 300));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() . $product->getPrice() . "<br>";
}

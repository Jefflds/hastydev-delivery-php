<?php

require __DIR__ . '/../vendor/autoload.php';

use Model\Product;

$product1 = new Product('Hamburguer', 10.99);
$product2 = new Product('Refrigerante', 2.5);

echo "<h2>Produtos Disponíveis:</h2>";
echo "<ul>";
echo "<li>{$product1->getName()} - R$ {$product1->getPrice()}</li>";
echo "<li>{$product2->getName()} - R$ {$product2->getPrice()}</li>";
echo "</ul>";

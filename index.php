<?php

require_once __DIR__ . '/src/Foggyline/Catalog/Model/Product.php';
require_once __DIR__ . '/src/Foggyline/Catalog/Model/Category.php';
require_once __DIR__ . '/src/Foggyline/Catalog/Block/Category/View.php';

use Foggyline\Catalog\Model\Product;
use Foggyline\Catalog\Model\Category;
use Foggyline\Catalog\Block\Category\View as CategoryView;

$category = new Category('Laptops');

$category->addProduct(new Product('RL', 'Red Laptop', 1499.99, 25));
$category->addProduct(new Product('YL', 'Yellow Laptop', 2499.99, 25));
$category->addProduct(new Product('BL', 'Blue Laptop', 3499.99, 25));

$categoryView = new CategoryView($category);

echo $categoryView->render();

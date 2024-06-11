<?php

require_once __DIR__ . "/../model/Product.php";

class ProductController
{
    public function listProducts()
    {
        $product = new Product();
        return $product->getAllProducts();
    }
}

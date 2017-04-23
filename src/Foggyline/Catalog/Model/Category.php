<?php

declare(strict_types = 1);

namespace Foggyline\Catalog\Model;

use Foggyline\Catalog\Product;

class Category {

    protected $title;
    protected $products = [];

    public function __construct(string $title) {
        $this->title = $title;
    }

    public function addProduct(Product $product): self {
        $this->products[] = $product;
        return $this;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getProducts(): array {
        return $this->products;
    }

}

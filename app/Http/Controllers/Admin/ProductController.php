<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    protected $productService;

    public function __construct(Product $product)
    {
        $this->productService = new ProductService($product);
    }
    public function getAll(){
      $products =  $this->productService->getAll();
      dd($products);

    }
}

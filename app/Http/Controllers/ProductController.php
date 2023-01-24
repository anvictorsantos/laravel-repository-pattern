<?php

namespace App\Http\Controllers;

use App\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductRepositoryInterface $model)
    {
        $products = $model->all();
        
        return view('products', compact('products'));
    }
}

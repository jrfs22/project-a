<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();

        return view('index', compact('products'));
    }

    public function create()
    {
        return view('create');
    }
}

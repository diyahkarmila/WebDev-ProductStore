<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [];
        for ($i = 1; $i <= 20; $i++) {
            $products[] = [
                'id' => $i,
                'name' => "Cake Product $i",
                'description' => "Delicious cake with premium ingredients $i",
                'price' => rand(50, 200) * 1000,
            ];
        }
        return view('products.list', compact('products'));
    }

    public function create()
    {
        return view('products.form');
    }

    public function store(Request $request)
    {
        // Simulasi penyimpanan
        return redirect()->route('products.index')
            ->with('success', 'Product added successfully!');
    }

    public function show($id)
    {
        $product = [
            'id' => $id,
            'name' => "Cake Product $id",
            'description' => "Detail of delicious cake $id",
            'price' => rand(50, 200) * 1000,
        ];
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = [
            'id' => $id,
            'name' => "Cake Product $id",
            'description' => "Edit this delicious cake $id",
            'price' => rand(50, 200) * 1000,
        ];
        return view('products.form', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Simulasi update
        return redirect()->route('products.index')
            ->with('success', "Product $id updated successfully!");
    }
}
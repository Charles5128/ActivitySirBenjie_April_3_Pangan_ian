<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index()
    {
        return Inertia::render('products', [
            'products' => Product::all()->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name1, // Convert name1 to name before sending to Vue
                    'description' => $product->description,
                    'price' => $product->price,
                    'quantity' => $product->quantity,
                ];
            })
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name1' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1'
        ]);

        Product::create($validated);

        return redirect('/products');
    }
}



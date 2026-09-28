<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    // PART A: the data lives here now, in ONE private helper.
    // Every method below asks this helper for the products.
    // The key (1, 2, 3...) matches each product's id, so one product
    // can be found with a single lookup instead of a loop.
    private function getProducts()
    {
        return [
            1 => ['id' => 1, 'name' => 'Bottled Water 500ml', 'price' => 15, 'stock' => 120, 'category' => 'Drinks'],
            2 => ['id' => 2, 'name' => 'Instant Noodles',     'price' => 12, 'stock' => 200, 'category' => 'Pantry'],
            3 => ['id' => 3, 'name' => 'Canned Sardines',     'price' => 25, 'stock' => 80,  'category' => 'Canned'],
            4 => ['id' => 4, 'name' => 'Sliced Bread',        'price' => 60, 'stock' => 30,  'category' => 'Bakery'],
            5 => ['id' => 5, 'name' => '3-in-1 Coffee',       'price' => 8,  'stock' => 300, 'category' => 'Drinks'],
            6 => ['id' => 6, 'name' => 'Corned Beef',         'price' => 45, 'stock' => 60,  'category' => 'Canned'],
            7 => ['id' => 7, 'name' => 'Pandesal Pack',       'price' => 20, 'stock' => 50,  'category' => 'Bakery'],
            8 => ['id' => 8, 'name' => 'Rice 1kg',            'price' => 55, 'stock' => 70,  'category' => 'Pantry'],
        ];
    }

    // The list page. Same as LA2, but the data now comes from the helper.
    public function index()
    {
        $products = $this->getProducts();

        return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        $products = $this->getProducts();

        // Is there a product with this id? If not, stop and show a proper 404 page.
        if (!isset($products[$id])) {
            abort(404);
        }

        return view('products.show', [
            'product' => $products[$id],
            'heading' => 'Product Details',
        ]);
    }
}
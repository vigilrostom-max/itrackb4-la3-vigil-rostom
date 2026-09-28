<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
        public	function	index()
    {
            $products	=	[
                ['name'	=>	'Bottled	Water	500ml',	'price'	=>	15,	'stock'	=>	120],
                ['name'	=>	'Instant	Noodles',	'price'	=>	12,	'stock'	=>	200],
                ['name'	=>	'Canned	Sardines',	'price'	=>	25,	'stock'	=>	80],
                ['name'	=>	'Sliced	Bread',	'price'	=>	60,	'stock'	=>	30],
                ['name'	=>	'3-in-1	Coffee',	'price'	=>	8,	'stock'	=>	300],
            ];
        return	view('products.index',	['products'	=>	$products]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reviews;
use App\Models\Product;
use auth;

class ProductReviewController extends Controller
{
    public function store($id)
    {
    	$product = Product::find($id);
    	$attribute = request()->all();
    	$attribute['product_id'] = $product->id;
    	$attribute['user_id'] = Auth::user()->id;

    	Reviews::create($attribute);

    	return back()->with('success', 'Review have been saved');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Page;
use App\Product;

class IndexController extends FrontendController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::find(1);

        $products = Product::inRandomOrder()->limit(4)->get();

        return view('index', compact('page', 'products'));
    }
}

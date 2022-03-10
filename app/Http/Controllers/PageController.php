<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function testmonial()
    {
        return view('testmonial');
    }

    public function clients()
    {
        $data['products'] = Product::paginate(6);
        return view('clients', $data);
    }

    public function contact()
    {
        return view('contact');
    }
}

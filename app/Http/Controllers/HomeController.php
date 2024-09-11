<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('home.userpage', compact('product'));
    }
    public function redirect()
    {
         
        $usertype=Auth::User()->usertype;
        $product = Product::all();

        if($usertype == '1')
        {
            return view('admin.home');
        }
        else
            {
                return view('home.userpage', compact('product'));
            }
    }
    
    public function product_detail($id)
    {
        $product = Product::Find($id);

        
        return view('home.product_detail', compact('product'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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

    public function add_cart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user = Auth::User();
            $product = Product::find($id);

            $cart = new Cart();

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;

            $cart->product_title = $product->title;
            $cart->price = $product->price * $request->quantity;
            $cart->image = $product->image;
            $cart->quantity = $request->quantity;
            $cart->product_id = $product->id;

            $cart->save();

            return redirect()->back()->with('message', 'Product Added Successfully To Cart');
        }
        else
        {
            return redirect('login');
        }
        
       
    }

    public function show_cart()
    {
         $cart = Cart::all();

         return view('home.showCart', compact('cart'));
    }

    public function delete_cart_item($id)
    {
        $item = Cart::Find($id);

        $item->delete();

        return redirect()->back()->with('message', 'Category deleted Successfully');
    }
}

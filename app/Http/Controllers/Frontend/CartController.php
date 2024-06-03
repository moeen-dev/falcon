<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $carts = Cart::where('user_id', $user->id)->get();
            $totalPrice = 0;

            foreach ($carts as $cart) {
                $totalPrice += $cart->price;
            }

            return view('frontend.cart.index', compact('carts', 'totalPrice'));
        } else {
            // Handle the case when the user is not authenticated
            // For example, redirect them to the login page
            return redirect()->route('user.login');
        }
    }

    public function addToCart(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('user.login');
        }

        $request->validate([
            'quantity' => 'required|min:1',
        ]);


        $user = Auth::user();
        $product = Product::find($id);
        $totalPrice = $product->current_price * $request->quantity;

        $existingCartItem = Cart::where('user_id', $user->id)->where('product_id', $product->id)->first();

        if ($existingCartItem) {
            $existingCartItem->quantity += $request->quantity;
            $existingCartItem->price += $totalPrice;
            $existingCartItem->save();
        } else {
            $cart = new Cart();
            $cart->name = $user->name;
            $cart->title = $product->title;
            $cart->image = $product->image1;
            $cart->price = $product->current_price * $request->quantity;
            $cart->quantity = $request->quantity;
            $cart->product_id = $product->id;
            $cart->user_id = $user->id;
            $cart->save();
        }

        return redirect()->route('cart.index')->with('success', 'New product added to the cart has been added successfully');
    }

    public function deleteCart($id)
    {
        $cart = Cart::findOrFail(intval($id));

        $cart->delete();

        return redirect()->back()->with('success', 'Product has been deleted from Cart.');        
    }
}

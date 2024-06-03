<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;

class ShoppingCart extends Component
{
    public function incrementQuantity($cartId)
    {
        $cartItem = Cart::find($cartId);
        $product = Product::find($cartItem->product_id);
        if ($cartItem) {
            $cartItem->quantity++;
            $cartItem->price = $product->current_price * $cartItem->quantity;
            $cartItem->save();
        }
    }

    public function decrementQuantity($cartId)
    {
        $cartItem = Cart::find($cartId);
        $product = Product::find($cartItem->product_id);
        if ($cartItem && $cartItem->quantity > 1) {
            $cartItem->quantity--;
            $cartItem->price = $product->current_price * $cartItem->quantity;
            $cartItem->save();
        }
    }

    public function destroy($id)
    {
        $cart = Cart::findOrFail(intval($id));

        $cart->delete();
        session()->flash('success', 'Item has been removed successfully!');
    }

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}

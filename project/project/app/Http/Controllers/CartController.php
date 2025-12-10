<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Show cart items
    public function index(Request $request)
    {
        $cart = session()->get('cart', []);
        $total = collect($cart)->sum(fn($item) => $item['total']);
        return view('cart', compact('cart', 'total'));
    }

    // Add item to cart
    public function add(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->input('id');
        $name = $request->input('name');
        $price = $request->input('price');
        $pounds = $request->input('pounds', 1);
        $quantity = $request->input('quantity', 1);
        $instructions = $request->input('instructions', '');
        $image = $request->input('image');

        $total = $price * $pounds * $quantity;

        $cart[$id] = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'pounds' => $pounds,
            'quantity' => $quantity,
            'instructions' => $instructions,
            'total' => $total,
            'image' => $image,
        ];

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    // Remove a single item
    public function remove($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }


}

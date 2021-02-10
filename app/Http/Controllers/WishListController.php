<?php

namespace App\Http\Controllers;

use App\Course;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;

class WishListController extends Controller
{
    public function store($id)
    {
        $course = Course::find($id);
        $wishlist = \Cart::session(Auth::user()->id . '_wishlist');

        $wishlist->add([
            'id' => $course->id,
            'name' => $course->title,
            'price' => $course->price,
            'quantity' => 1,
            'associatedModel' => $course
        ]);

        return redirect()->route('cart.index');
    }

    public function destroy($id)
    {
        \Cart::session(Auth::user()->id . '_wishlist')->remove($id);
        return redirect()->route('cart.index')->with('success', 'Cours supprimé de votre liste de souhait avec succès.');
    }

    public function toCart($id)
    {
        $course = Course::find($id);
        \Cart::session(Auth::user()->id . '_wishlist')->remove($id);
        $add = \Cart::session(Auth::user()->id)->add([
            'id' => $course->id,
            'name' => $course->title,
            'price' => $course->price,
            'quantity' => 1,
            'associatedModel' => $course
        ]);

        return redirect()->route('cart.index')->with('success', 'Cours transféré de votre liste  de souhaits dans votre panier avec succès.');
    }

    public function toWishList($id)
    {
        $course = Course::find($id);
        \Cart::session(Auth::user()->id)->remove($id);
        \Cart::session(Auth::user()->id . '_wishlist')->add([
            'id' => $course->id,
            'name' => $course->title,
            'price' => $course->price,
            'quantity' => 1,
            'associatedModel' => $course
        ]);

        return redirect()->route('cart.index')->with('success', 'Cours transféré de votre panier dans votre liste de souhaits avec succès.');
    }
}

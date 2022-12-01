<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\Cart\CartRepository;
use Illuminate\Http\Request;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $cart;
    public function __construct(CartRepository $cart)
    {
        $this->cart = $cart;
    }



    public function index()
    {
        return view("Front.Cart.index" , [
            "cart" => $this->cart
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "product_id" => ["required" , "int" , "exists:products,id"] ,
            "quantity" => ["nullable" , "int" , "min:1"]
        ]);


        $product = Product::findOrFail($request->post('product_id'));
        $this->cart->add($product , $request->post("quantity"));

        return redirect()->route("cart.index")->with("cart_added" , "product added to Cart!");


    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, )
    {
        $request->validate([
            "product_id" => ["required" , "int" , "exists:products,id"] ,
            "quantity"   => ["nullable" , "int" , "min:1"]
    ]);

            $product = Product::findOrFail($request->post("product_id"));
            $this->cart -> update($product , $request->post("quantity"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $this->cart -> delete($id);
    }
}
<?php

namespace App\Repositories\Cart;
use Illuminate\Support\Str;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class CartModelRepository implements CartRepository{

    public function get() : Collection {
        return Cart::with("product") ->where("cookie_id" , "=" , $this->getCookieId())->get();
    }

    public function add(Product $product , $quantity=1){

        $item = Cart::where('product_id' , '=' , $product->id)
                    ->where('cookie_id' , '=' , $this->getCookieId())
                    ->first();
            if(!$item){
                return Cart::create([
                    "product_id" => $product ->id ,
                    "user_id" => Auth::id(),
                    "cookie_id" => $this-> getCookieId(),
                    "quantity" => $quantity,
                ]);
            }
        return $item->increment("quantity" , $quantity);

    }

    public function update(Product $product, $quantity)
    {
        Cart::where("product_id" , "=" , $product->id)
            -> where("cookie_id" , "=" , $this->getCookieId())
            -> update([
                "quantity" => $quantity
            ]);
    }

    public function delete($id)
    {
        Cart::where("id" , "=" , $id)
                ->where("cookie_id" , "=" , $this->getCookieId())
                ->delete();
    }

    public function empty()
    {
        Cart::where("cookie_id" , "=" , $this->getCookieId())->destroy();
    }

    public function total(): float
    {
        return Cart::where("cookie_id" , "=" , $this->getCookieId())
        ->join("products" , "product.id" , "=" , "cats.products_id")
        ->selectRaw("SUM(products.price * carts.quantity) as total")
        -> value("total");
    }

    protected function getCookieId(){
        $cookie_id = Cookie::get("cart_id");

        if(!$cookie_id){
            $cookie_id = Str::uuid();
            Cookie::queue("cart_id" , $cookie_id , 30*24*60);
        }

        return $cookie_id;
    }
}

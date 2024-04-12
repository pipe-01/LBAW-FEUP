<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{


    function get_cart_order_id()  // aux from refactoring
    {
      $userid = auth()->user()->id;
      $allorders = DB::table('orderlist')->where('user_id', $userid)->get();

      $cart = $allorders[0]; // temporary var

      for($i = 0; $i < sizeof($allorders); $i++){
        if ($allorders[$i]->state == 0){          // swith to 0 later

          $cart = $allorders[$i];
        }
      }
      $cartid = $cart->id;
      return $cartid;
    }

    function cartList()
    {
      
      $cartid = $this->get_cart_order_id();
      $purchases = DB::table('purchase')->where('orderlist_id', $cartid)->get(); // purchases currently in this cart
      

      $all_products = Product::all();
      $cart_products = [];

      for($i = 0; $i < sizeof($all_products); $i++){
        for($j = 0; $j < sizeof($purchases); $j++){

          if($all_products[$i]->id == $purchases[$j]->product_id){  // adding correct products to cart_products
            array_push($cart_products, $all_products[$i]);
          }
        }
      }

      return view('pages/cart')->with(['product' => $cart_products]);

      return $cart_products;
    }


    function addToCart(Request $req)
    {
      if(Auth::check())
        {

          $new_purchase = [
            'product_id' => $req->product_id,
            'orderlist_id' => $this->get_cart_order_id(),
            'quantity' => 1
            ];
    
          DB::table('purchase')->insert($new_purchase);

          return redirect('/');
        }
        
      else{
        return redirect('/login'); // users have to log in before adding to cart
      }
    }

    /*
    function removeFromCart(Request $req)
    {
      $purchase_to_remove = [
        'product_id' => $req->product_id,
        'orderlist_id' => $this->get_cart_order_id(),
        'quantity' => 1
        ];
      
        DB::table('purchase')->delete($purchase_to_remove);

        return redirect('/');
    }
    */

    /*
    function clearCart(){

      $cartid = $this->get_cart_order_id();
      $all_purchases = DB::table('purchase');

      for($i = 0; $i < sizeof($all_purchases); $i++){
        if($all_purchases[$i]->orderlist_id == $cartid){
          
        }
      }
      
    }
    */

    function checkout()
    {

      return view('pages/checkout');//->with(['product' => $cart_products]);

      //return $cart_products;
    }

    function paid()
    {
      $cartid = $this->get_cart_order_id();
      $userid = auth()->user()->id;

      DB::table('orderlist')->where('id', $cartid)->update(['state' => 1]);

      $new_cart = [
        'id' => $cartid + 1000,
        'date' => '2022-01-25',
        'total' => 1,
        'state' => 0,
        'delivery_type_id' => 1,
        'user_id' => $userid
      ];

      DB::table('orderlist')->insert($new_cart);

      return redirect('/');
    }

  }




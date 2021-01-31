<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Products;
use Illuminate\Http\Request;
use Session;
class CartController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        if (Session::has("cart"))
        {
            $carts = Session::get('cart');
            
        }else{
            $carts =0;
        }
        if (Session::has("totalPrice"))
        {
            $totalPrice = Session::get('totalPrice');
            $totalPrice =$totalPrice[0] ;
        }else{
            $totalPrice =0;
        }

        if (Session::has("totalQty"))
        {
            $totalQty = Session::get('totalQty');    
            $totalQty =$totalQty[0] ;
           
        }else{
            $totalQty =0;
        }
       
        $data =[
            'title' => '老司機' ,
            'carts' => $carts,
            'totalPrice' => $totalPrice,
            'totalQty' => $totalQty,
        ];

        return view('count')->with("data",$data);    
       
    }
    public function add ($id )
    {
        $products = Products::where('id', $id)->first();
        $cart = [
            'id' => $products->id,
            'name' => $products->name,
            'amount' => $products->amount,
            'qty' => 1,
        ];
        
        if (Session::has("cart"))
        {
            $value = Session::get('cart');

            if(in_array($cart,$value)){
                
            }else{
                Session::push("cart",$cart);

            }
        }else{
            Session::push("cart", $cart);
        }

        if (Session::has("totalQty"))
        {
            $totalQty = Session::get('totalQty');
            $totalQty =$totalQty[0] ;
            $totalQty++;
            Session::forget('totalQty');
            Session::push("totalQty", $totalQty);
        }else{
            Session::push("totalQty", 1);
        }

        if (Session::has("totalPrice"))
        {
            $increase = $cart['amount'];
            $totalPrice = Session::get('totalPrice');
            
            $totalPrice =$totalPrice[0] ;
            $totalPrice += $increase;
            Session::forget('totalPrice');

            Session::push("totalPrice", $totalPrice);
        }else{
            $increase = $cart['amount'];
            Session::push("totalPrice",$increase);
        }
        
        return redirect('/');
    }

    public function increaseByOne($id)
    {
        //
        $products = Products::where('id', $id)->first();
        $items = Session::pull('cart');
        foreach ($items as $item) {
           if($item['id']==$id){
                $item['qty']++;
                
                Session::push("cart",$item);
           }else{
                Session::push("cart",$item);
           }
           
        }
       
        $totalPrice = Session::pull('totalPrice');
        $totalPrice =$totalPrice[0] ;
        $totalPrice+= $products->amount;
        Session::push("totalPrice", $totalPrice);
        $totalQty = Session::pull('totalQty');
        $totalQty =$totalQty[0] ;
        $totalQty++;

        Session::push("totalQty", $totalQty);
        
        return redirect('/count');
    }

    public function decreaseByOne($id)
    {
        $products = Products::where('id', $id)->first();
        $items = Session::pull('cart');
        foreach ($items as $item) {
           if($item['id']==$id){
                if($item['qty']==1){
                   
                }else{
                    $item['qty']--;
                    Session::push("cart",$item);
                }
           }else{
                Session::push("cart",$item);
           }
        }
        
        $totalPrice = Session::pull('totalPrice');
        $totalPrice =$totalPrice[0] ;
        $totalPrice+= $products->amount;
       
        Session::push("totalPrice", $totalPrice);
        $totalQty = Session::pull('totalQty');
        $totalQty =$totalQty[0] ;
        $totalQty++;
           
        Session::push("totalQty", $totalQty);
        
        return redirect('/count');
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $products = Products::where('id', $id)->first();
        $items = Session::pull('cart');
        $totalQty = Session::pull('totalQty');
        $totalQty =$totalQty[0] ;
        $totalPrice = Session::pull('totalPrice');
        $totalPrice =$totalPrice[0] ;

        foreach ($items as $item ) {
           if($item['id']==$id){
            $totalPrice-= $item['amount'];
            $totalQty-= $item['qty'];
                
           }else{
                Session::push("cart",$item);
           }
           
        }
  
        Session::push("totalPrice", $totalPrice);
        Session::push("totalQty", $totalQty);
        
        return redirect('/count');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        Session::flush();
        return redirect('/');
    }
}

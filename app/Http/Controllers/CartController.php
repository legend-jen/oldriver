<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->request = new Request();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($this->request->session()->has('package_id')){
            $sdata = $this->request->session()->all();
        }
        $sdata ='';
        $data =[
            'title' => '老司機' ,
            'products' => $sdata
        ];

        return view('count')->with("data",$data);    
       
    }
    public function add ($id)
    {
        $products = Products::where('id',$id)->get();
        if ($this->request->session()->has(['id' => $id])) {
            return '';
        }else{
            $this->request->session()->put([
                'id' => $products->id, 
                'name' => $products->name, 
                'amount' => $products->amount, 
                'number' => 1 
            ]);
        }
        
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
        //
    }
}

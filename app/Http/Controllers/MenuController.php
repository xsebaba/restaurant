<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Type;
use App\Models\Order;
use App\Models\Meal;
use Illuminate\Http\Request;
use Auth;
use Session;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Displaying menu items is in TypeController to dive items into groups like drinks, starters etc.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu= new Menu;
        $menu->name_item = request('name_item');
        $menu->ingredients = request('ingredients');
        $menu->price = request('price');
        $menu->save();
        return redirect('/menu')->with('mssg', 'Dodano element do menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('/menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $menu= Menu::findOrFail($id);

        $menu->name_item = request('name_item');
        $menu->ingredients = request('ingredients');
        $menu->price = request('price');
        $menu->update();

    return redirect('/menu')->with('mssg', 'Zaktualizowano element');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu= Menu::findOrFail($id);
        $menu->delete();
    
        return redirect('/menu');
    }

    public function addToOrder(Request $request, $id){
        $menu = Menu::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Meal($oldCart);
        $cart->add($menu, $menu->id);
        $request->session()->put('cart', $cart);
        return redirect('/menu');

    }

    public function getOrder(){
        if(!Session::has('cart')){
            return view('/menu.ordercart');
        }
    
        $oldCart = Session::get('cart');
        $cart = new Meal($oldCart);
        return view('/menu.ordercart',
             ['orders' => $cart->items, 
             'totalPrice' => $cart->totalPrice
            ]);
    }
    public function getCheckout(){
   
        if(!Session::has('cart')){
            return view('/menu.ordercart');
            }
        $oldCart = Session::get('cart');
        $cart = new Meal($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', [
            'total' => $total,
            'orders' => $cart->items,
        ]);
    }
    public function postCheckout(Request $request){
        if(!Session::has('cart')){
            return view('/menu.ordercart');
        }
       
        $oldCart = Session::get('cart');
          
        $cart = new Meal($oldCart); 
        $cart -> cart = serialize($cart);
        $cart -> delivery = $request->input('address');
        $cart -> name = $request->input('name');
        $cart -> tel = $request->input('tel');
   

        $order = new Order();
        $order->cart = $cart -> cart;
        $order -> delivery  = $cart -> delivery;
        $order->name =  $cart -> name;
        $order-> tel = $cart -> tel;
        $order-> payment = 0;
        $order-> finalized = 0;
        $order -> save();


        Session::forget('cart');
        return redirect('/menu')->with('mssg', 'We received your order');
    }
}
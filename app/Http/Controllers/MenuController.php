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
    
    public function adminPanel()
    {
        $menus = Menu::orderBy('type_id')->get();
        return view('admin', compact('menus'));
    }
    
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
        $types = Type::get();
        return view('menu.create', compact('types'));
    }


    public function store(Request $request)
    {
        /*
        $request->validate([
            'name_item' => 'required|min:3|max:255',
            'type_id'=> 'required',
            'ingredients' => 'nullable|min:3|max:255',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
       
        */
       
        $menu = new Menu($request->all());
        if($request->hasFile('image')){
            $menu->imagepath = $request->file('image')->store('img');
        }
        
        $menu->save();
        return redirect('/menu');
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

    public function update(Request $request, $id)
    {
        $menu= Menu::findOrFail($id);
        if($request->hasfile('image')){
            $menu->imagepath = $request->file('image')->store('img');
        }
        $menu->name_item = $request->input('name_item');
        $menu->ingredients = $request->input('ingredients');
        $menu->price = $request->input('price');
        $menu->update();

    return redirect('/menu')->with('mssg', 'The selected element is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    
     public function preDelete($id)
     {
         $menu = Menu::findOrFail($id);
         return view('/menu.delete', compact('menu'));
     }
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
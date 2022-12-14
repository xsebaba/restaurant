<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Type;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
}

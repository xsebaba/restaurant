<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Menu;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Type $type)
    {
        $types = Type::all();
        return view('menu.index',
        compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.typecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $types= new Type;
        $types->typename = request('typename');
        $types->save();
        return redirect('/menu')->with('mssg', 'Dodano element do menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = Type::findOrFail($id);
        return view('menu.typeedit', compact('types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, type $type)
    {
        $types= Type::findOrFail($id);
        $types->typename = request('typename');
        $types->save();
        return redirect('/menu')->with('mssg', 'Zaktualizowano element');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $types= Type::findOrFail($id);
        $types->delete();
    
        return redirect('/menu');
    }
}

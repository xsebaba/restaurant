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
        return view('menu.createtype');
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
        return redirect('/admin')->with('mssg', 'Dodano element do menu');
    }

    public function indexTypes(type $type)
    {
        $types = Type::all();
        return view('menu.indextypes',
        compact('types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::findOrFail($id);
        return view('menu.edittype', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $type= Type::findOrFail($id);
        $type->typename = $request->input('typename');
        $type->save();
        return redirect('/types')->with('mssg', 'Zaktualizowano element');
    }

    public function preDelete($id)
    {
        $type = Type::findOrFail($id);
        return view('menu.deletetypes', compact('type'));

    }
    public function destroy($id)
    {
        $types= Type::findOrFail($id);
        $types->delete();
    
        return redirect('/types');
    }
}

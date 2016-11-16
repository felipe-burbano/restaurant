<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MenuRequest;
use App\Menu;



class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus =  menu::all();
        return view('menu', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('menu.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    $request->user()->menu()->create([
            'categoria'         => $request->tipoComida,
            'fecha'             => $request->fecha,
            'sopa'              => $request->sopaNombre,
            'arroz'             => $request->arrozNombre,
            'carnes'            => $request->carnesNombre,
            'ensalada'          => $request->ensaladaNombre,
            'principio'         => $request->principioNombre,
            'jugo'              => $request->jugoNombre,
            'valor_almuerzo'    => $request->valorAlmuerzo,
            'valor_bandeja'     => $request->valorBandeja,

        ]);
  
      return redirect('/home')->with('success','Se agrego correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
          $this->authorize('owner', $menu);
          $menu->delete();
          return redirect('/home')->with('success','Menú eliminado correctamente');
    }
}

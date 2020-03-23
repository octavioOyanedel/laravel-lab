<?php

namespace App\Http\Controllers;

use App\Clase;
use Illuminate\Http\Request;
use App\Traits\StoreGenerico;
use App\Http\Requests\ClaseRequest;

class ClaseController extends Controller
{
    use StoreGenerico;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clase.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clase.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClaseRequest $request)
    {
        $this->testStore($request, new Clase);
        return redirect()->route('home')->with('status', 'Si que si');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function show(Clase $clase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function edit(Clase $clase)
    {
        testDesdeMisMetodos();
        return view('clase.edit', compact('clase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clase $clase)
    {
        $this->testUpdate($request, $clase);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clase $clase)
    {
        $this->testDelete($clase);
        return redirect()->route('home');
    }
}

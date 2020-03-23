<?php

namespace App\Http\Controllers;

use App\Teniente;
use Illuminate\Http\Request;
use App\Traits\StoreGenerico;

class TenienteController extends Controller
{

    use StoreGenerico;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teniente.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teniente.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->testStore($request, new Teniente);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teniente  $teniente
     * @return \Illuminate\Http\Response
     */
    public function show(Teniente $teniente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teniente  $teniente
     * @return \Illuminate\Http\Response
     */
    public function edit(Teniente $teniente)
    {
        return view('teniente.edit', compact('teniente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teniente  $teniente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teniente $teniente)
    {
        $this->testUpdate($request, $teniente);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teniente  $teniente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teniente $teniente)
    {
        $this->testDelete($teniente);
        return redirect()->route('home');
    }
}

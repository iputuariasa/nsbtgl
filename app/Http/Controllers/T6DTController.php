<?php

namespace App\Http\Controllers;

use App\Models\T6DT;
use Illuminate\Http\Request;

class T6DTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('t6dt.index',[
            'title' => 'Data T6DT',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(T6DT $t6DT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(T6DT $t6DT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, T6DT $t6DT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(T6DT $t6DT)
    {
        //
    }
}

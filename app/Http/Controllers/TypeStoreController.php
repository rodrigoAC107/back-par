<?php

namespace App\Http\Controllers;

use App\Models\TypeStore;
use Illuminate\Http\Request;

class TypeStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['data' => TypeStore::all()]);
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
     * @param  \App\Models\TypeStore  $typeStore
     * @return \Illuminate\Http\Response
     */
    public function show(TypeStore $typeStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeStore  $typeStore
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeStore $typeStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeStore  $typeStore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeStore $typeStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeStore  $typeStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeStore $typeStore)
    {
        //
    }
}

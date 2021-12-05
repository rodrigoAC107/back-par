<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\StoreUpdateRequest;
use App\Http\Resources\StoreResourceStore;
use App\Http\Resources\StoreResourceUpdate;
use App\Models\Store;
use App\Services\StoreService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $per_page = (int)$request->perPage;
        $q = StoreService::all($per_page);
        return StoreResourceStore::collection($q);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoreRequest $request)
    {
        $validated = $request->validated();

        $store = StoreService::store($validated);

        return new StoreResourceStore($store);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        return new StoreResourceUpdate($store);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateRequest $request, Store $store)
    {
        $validated = $request->validated();

        $store = StoreService::update($validated, $store);

        return new StoreResourceUpdate($store);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        $store->delete();

        return response(["message" => "Se elimino el comercio con exito."], 200);
    }
}

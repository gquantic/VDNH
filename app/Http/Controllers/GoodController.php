<?php

namespace App\Http\Controllers;

use App\Http\Resources\GoodCollection;
use App\Http\Resources\GoodResource;
use App\Models\Good;
use App\Http\Requests\StoreGoodRequest;
use App\Http\Requests\UpdateGoodRequest;

class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return GoodCollection
     */
    public function index()
    {
        return new GoodCollection(Good::all());
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
     * @param  \App\Http\Requests\StoreGoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Good $good
     * @return GoodResource
     */
    public function show(Good $good)
    {
        return new GoodResource($good);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Good $good
     * @return \Illuminate\Http\Response
     */
    public function edit(Good $good)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoodRequest  $request
     * @param Good $good
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGoodRequest $request, Good $good)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Good $good
     * @return \Illuminate\Http\Response
     */
    public function destroy(Good $good)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Subtodo;
use App\Http\Requests\StoreSubtodoRequest;
use App\Http\Requests\UpdateSubtodoRequest;
use App\Models\Todo;
use GuzzleHttp\Psr7\Request;

class SubtodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            Subtodo::all()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubtodoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubtodoRequest $request)
    {
        return response()->json(
            Subtodo::create($request->validated())
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subtodo  $subtodo
     * @return \Illuminate\Http\Response
     */
    public function show(Subtodo $subtodo)
    {
        return response()->json(
            $subtodo
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubtodoRequest  $request
     * @param  \App\Models\Subtodo  $subtodo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubtodoRequest $request, Subtodo $subtodo)
    {
        $subtodo->update($request->validated());

        return response()->json(
            Subtodo::find($subtodo->id)
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subtodo  $subtodo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subtodo $subtodo)
    {
        $subtodo->delete();

        return response()->json(
            $subtodo
        );
    }
}

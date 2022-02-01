<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Requests\DescStoreRequest;
use Illuminate\Http\Request;

use App\Models\Desc;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\DescResource;
use Facade\FlareClient\Http\Response;

class DescController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DescResource::collection(Desc::with('lists')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DescStoreRequest $request)
    {
        $created_desc = Desc::create($request->validated());

        return new DescResource($created_desc);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Desc $desc)
    {
        return new DescResource($desc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DescStoreRequest $request, Desc $desc)
    {
        $desc->update($request->validated());

        return new DescResource($desc);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desc $desc)
    {
        $desc->delete();

        return response(null, Response);
    }
}

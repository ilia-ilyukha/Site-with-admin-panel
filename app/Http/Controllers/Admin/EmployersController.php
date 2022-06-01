<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employers;
use Illuminate\Support\Facades\DB;

class EmployersController extends Controller
{
    /**
     * Display a listing of employers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employers = Employers::all();
        return view('admin.employers.index', [
            'employers'      => $employers
        ]);
    }

        /**
     * Show the form for editing article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employers $employer)
    {

    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employers $employer)
    {

    }
}

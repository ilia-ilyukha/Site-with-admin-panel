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
        $employers = DB::table('employers')
        ->leftJoin('departments', 'employers.department_id', '=', 'departments.id')
        ->get(['employers.*', 'departments.name as department_name']);

        return view('admin.employers.index', [
            'employers'      => $employers
        ]);
    }

    /**
     * Show the form for editing employee.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employers $employer)
    {
        return view('admin.employers.edit', [
            'employer'      => $employer
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "show employee";
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

    public function import(Request $request)
    {
        if (isset($request->file)) {
            dd($request->file);
        //     $request->file->storeAs('employes', 'employes.xml');
        //     echo "File has been uploaded!";                   

        //     $xmlDataString = file_get_contents(storage_path('app/employes/employes.xml'));
        //     $xmlObject = simplexml_load_string($xmlDataString);
        //     $json = json_encode($xmlObject);
        //     $phpDataArray = json_decode($json, true);
        //     Employers::insert($phpDataArray['employee']); 
        }
            
        // return view('employee.import');
        return view('admin.employers.import');
    }
}

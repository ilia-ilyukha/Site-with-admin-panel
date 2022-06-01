<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of employers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $departments = Department::all();
        
        return view('admin.department.index', [
            'departments'      => $departments
        ]);
    }
}

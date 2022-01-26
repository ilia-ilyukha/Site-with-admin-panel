<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobs;
use Illuminate\Support\Facades\DB;

class JobsController extends Controller
{    
    public function index(){
        return Jobs::all();
    }
}

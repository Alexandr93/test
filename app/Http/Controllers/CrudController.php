<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    function viewAllExployees(){

        return view('crud',compact('sotr'));
    }
}

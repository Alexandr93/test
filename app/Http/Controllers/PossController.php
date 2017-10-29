<?php

namespace App\Http\Controllers;


use App\Employee;
use Illuminate\Http\Request;

class PossController extends Controller
{
    function index(){

        $sotr=Employee::all();
        return view('sotrudniki',compact('sotr'));

    }
    function editPoss(){

       Employee::fixTree();
        $sotr  =  Employee::get()->toTree();
        //print_r($sotr);
       /* $boss=[];
        $podchin=[];
       $sotri=Employee::all();
    //print_r($sotri);
        $sotr = $sotri->unique('boss');
		
        //$groop=$sotr->groupBy('bossid');

        foreach ($sotri as $val){
            $boss[$val->boss][]=$sotri->get('boss', $val->name);
            //echo $val->bossid.'<br>';
		
        }

       // print_r($boss);
    //array_shift($boss);
	foreach ($boss as $k=>$value){
        echo '..-'.$k.'<br>';
            foreach ($value as $key=>$v){

	    		echo ' ----: '.$v.'<br>';
		    	$myboss[$k][]=$v;

	
		}
		echo '<br>';

	}




        
        print_r($boss);
*/



        return view('newvi', compact('sotr'));


    }
}

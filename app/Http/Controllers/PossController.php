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
        $sotr  =  Employee::get()->toTree();//json для построения дерева


       $arrColl=$sotr->toArray();
     /*   echo "<pre>";
       print_r($arrColl);
        echo "</pre>";
*/
        $sotr=str_replace('name', 'text', $sotr);

        $fp=fopen($_SERVER['DOCUMENT_ROOT'].'/tsconfig.json', "w");
        fwrite($fp, $sotr);
        fclose($fp);


        return view('newvi', compact('sotr'));


    }
}

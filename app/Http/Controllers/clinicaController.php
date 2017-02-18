<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\clinica;

class clinicaController extends Controller
{
    public function index(){
        $clinica=[];
        return view("clinica.index", compact('clinica'));
    }
    
    public function create(Request $request){
        
        $input=$request->all();
        clinica::create($input);
    

        return redirect('clinica/registrar');
          
        
        
        
        
    }
        public function save(){
       
       

        return view('clinica.index', compact('clinica'));


    }
    
}
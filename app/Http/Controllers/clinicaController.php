<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\clinica;

class clinicaController extends Controller
{
    public function index(){
        return view("clinica.index");
    }
    
    public function create(Request $request){
        //try{ 
        $input=$request->all();
        Clinica::create($input);
       // return redirect('/clinica/registrar');
         // } catch(\Exception $e){
        return redirect('/clinica/registrar');
          //}
        
        
        
        
    }
    
}
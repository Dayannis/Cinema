<?php

namespace Cinema\Http\Controllers;

use Cinema\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimerController extends Controller
{

    public function showName()
    {
        $data = [ 'name' => 'Dayannis', 'apell' => 'Alguaca'];
    
        return view('primeravista', compact('data') );

    }

    public function almacenar (Request $request)
    {
    	if ($request->has('name')) {
    		$nombre = $request->get('name');
    		return "su nombre es: ".$nombre;    
    	}else{
    		return "No introdujo su nombre";
    	}
    } 
    
    public function mostrar()
    {
   
        return view('segundavista');
        /*return view::make("resources.views.segundavista");*/
    }  

}
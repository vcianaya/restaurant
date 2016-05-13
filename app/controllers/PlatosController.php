<?php

class PlatosController extends BaseController {

	public function administrarPlatos(){ 
        
        return View::make('administrador.platos.platos');
    }

	public function registarPlato()
    {
    	return View::make('administrador.platos.agregar');
    }

 	public function guardarPlato()
	{
		DB::table('plato')->insert(
		array('idplato' => '1', 
  			  'nomplato' => $_POST['nomplato'],
  			  'desplato' => $_POST['desplato'],
  			  'preplato' => $_POST['preplato'],
  			  'stockplato' => $_POST['stockplato']
  			  ));

	
	}
}

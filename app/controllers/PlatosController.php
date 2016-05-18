<?php

class PlatosController extends BaseController {

	public function administrarPlatos(){ 
        
        return View::make('administrador.platos.platos');
    }

 	public function guardarPlato()
	{
    $_plato = array();
    $_plato['idplato'] = Input::get('correlativo');
    $_plato['nomplato'] = Input::get('nomplato');
    $_plato['desplato'] = Input::get('desplato');
    $_plato['preplato'] = Input::get('preplato');
    $_plato['tieplato'] = Input::get('tieplato');
    $_plato['stockplato'] = Input::get('stockplato');
    $_plato['correlativo'] = 1;
    $insert = DB::table('plato')->insert($_plato);
    if($insert)
      {
        $c=Input::get('correlativo');
        $c=$c+1; 
        DB::table('correlativo')
            ->where('idcorrelativo', 1)
            ->update(array('nrocorrelativo' => $c));
      }        
    return json_encode(array('plato'=>$_plato));
	}
  public function agregarPlato()
  {
    $correlativo = DB::table('correlativo')->where('idcorrelativo', 1)->first();
    return View::make('administrador.plato.frmagregarplato',array('correlativo'=>$correlativo));
  }
  public function listarPlatos()
  {
    $platos = DB::table('plato')->get();
    return View::make('administrador.plato.administrarplato',array('platos'=>$platos));
  }

   public function editar(){
        $id = Input::get('idplato');
        $_plato = DB::table('plato')->where('idplato','=',$id)->first();        
        $_datos = array();
        $_datos['idplato'] = $id;
        $_datos['nomplato'] = $_plato->nomplato;
        $_datos['desplato'] = $_plato->desplato; 
        $_datos['preplato'] = $_plato->preplato;        
        $_datos['tieplato'] = $_plato->tieplato; 
        $_datos['stockplato'] = $_plato->stockplato; 
        return View::make('administrador.plato.frmagregarplato',array('datos'=>$_datos));
    }
}

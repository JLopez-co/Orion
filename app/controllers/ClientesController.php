<?php
class ClientesController extends BaseController{

    public function getCliente (){
        $result= DB::select("select * from View_consultarClientes;");
        
        return View::make('Ejemplos/consultaClientes',["Clientes" => $result]);
    }
}

<?php
class ClientesController extends BaseController{
    public function getCliente(){
      $result= DB::select("select * from View_consultarClientes;");
      //$tablaActores = usuario::paginate(12);
      return View::make('Ejemplos/consultaClientes',["Clientes" => $result]);
    }
}

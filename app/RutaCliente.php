<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RutaCliente extends Model
{
    protected $table = 'ruta_cliente';
    protected $guarded = ['id', 'fkruta', 'fkcliente'];
    protected $fillable = ['estado'];

    public static function Mostrar($estado)
    {
        return RutaCliente::join('ruta', 'ruta_cliente.fkruta', 'ruta.id')
        			->join('cliente', 'ruta_cliente.fkcliente', 'cliente.id')
       				->where('ruta_cliente.estado', $estado)
                    ->select('ruta_cliente.*', 'ruta.nombre as ruta_nombre', 'cliente.nombres as cliente_nombres', 'cliente.apellidos as cliente_apellidos')->OrderBy('cliente.nombres', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return RutaCliente::find($id)->first();
    }     

    public static function Crear(Request $request)
    {
        $data = new RutaCliente();
        $data->fkruta = $requet->fkruta;   
        $data->fkcliente = $requet->fkcliente;  

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = RutaCliente::findOrFail($id);
        $data->fkruta = $requet->fkruta;   
        $data->fkcliente = $requet->fkcliente; 

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = RutaCliente::findOrFail($id);

        switch ($data->estado) {
            case 1:
                $data->estado = 0;  
                break;
            
            case 0:
                $data->estado = 1;
                break;
        }      

        if($data->save()){ return true; }
        else { return false; }
    }
}

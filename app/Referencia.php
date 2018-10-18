<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Referencia extends Model
{
    protected $table = 'referencia';
    protected $guarded = ['id', 'fktipo_referencia', 'fkcliente'];
    protected $fillable = ['nombre', 'telefono', 'estado'];

    public static function Mostrar($estado)
    {
        return Referencia::join('tipo_referencia', 'referencia.fktipo_referencia', 'tipo_referencia.id')
        			->join('cliente', 'referencia.fkcliente', 'cliente.id')
       				->where('referencia.estado', $estado)
                    ->select('referencia.*', 'tipo_referencia.nombre as tipo_referencia_nombre', 'cliente.nombres as cliente_nombres', 'cliente.apellidos as cliente_apellidos')->OrderBy('cliente.nombres', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return Referencia::find($id)->first();
    }     

    public static function Crear(Request $request)
    {
        $data = new Referencia();
        $data->nombre = $requet->nombre;   
        $data->telefono = $requet->telefono;         
        $data->fktipo_referencia = $requet->fktipo_referencia;   
        $data->fkcliente = $requet->fkcliente;  

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = Referencia::findOrFail($id);
        $data->nombre = $requet->nombre;   
        $data->telefono = $requet->telefono;         
        $data->fktipo_referencia = $requet->fktipo_referencia;   
        $data->fkcliente = $requet->fkcliente;  

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = Referencia::findOrFail($id);

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

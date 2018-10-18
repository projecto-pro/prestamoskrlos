<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ClienteProfesion extends Model
{
    protected $table = 'cliente_profesion';
    protected $guarded = ['id', 'fkprofesion', 'fkcliente'];
    protected $fillable = ['estado'];

    public static function Mostrar($estado)
    {
        return ClienteProfesion::join('profesion', 'cliente_profesion.fkprofesion', 'profesion.id')
        			->join('cliente', 'cliente_profesion.fkcliente', 'cliente.id')
       				->where('cliente_profesion.estado', $estado)
                    ->select('cliente_profesion.*', 'profesion.nombre as profesion_nombre', 'cliente.nombres as cliente_nombres', 'cliente.apellidos as cliente_apellidos')->OrderBy('cliente.nombres', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return ClienteProfesion::find($id)->first();
    }     

    public static function Crear(Request $request)
    {
        $data = new ClienteProfesion();
        $data->fkprofesion = $requet->fkprofesion;   
        $data->fkcliente = $requet->fkcliente;  

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = ClienteProfesion::findOrFail($id);
        $data->fkprofesion = $requet->fkprofesion;   
        $data->fkcliente = $requet->fkcliente; 

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = ClienteProfesion::findOrFail($id);

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

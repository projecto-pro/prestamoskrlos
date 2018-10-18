<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TipoAbono extends Model
{
    protected $table = 'tipo_abono';
    protected $guarded = ['id'];
    protected $fillable = ['nombre', 'estado'];

    public static function Mostrar($estado)
    {
        return TipoAbono::where('estado', $estado)
                    ->select('tipo_abono.*')->OrderBy('nombre', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return TipoAbono::find($id)->first();
    }     

    public static function Crear(Request $request)
    {
        $data = new TipoAbono();
        $data->nombre = $requet->nombre;     

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = TipoAbono::findOrFail($id);
        $data->nombre = $requet->nombre;

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = TipoAbono::findOrFail($id);

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

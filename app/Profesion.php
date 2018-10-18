<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Profesion extends Model
{
    protected $table = 'profesion';
    protected $guarded = ['id'];
    protected $fillable = ['nombre', 'estado'];

    public static function Mostrar($estado)
    {
        return Profesion::where('estado', $estado)
                    ->select('profesion.*')->OrderBy('nombre', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return Profesion::find($id)->first();
    }     

    public static function Crear(Request $request)
    {
        $data = new Profesion();
        $data->nombre = $requet->nombre;     

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = Profesion::findOrFail($id);
        $data->nombre = $requet->nombre;

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = Profesion::findOrFail($id);

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

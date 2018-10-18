<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Ruta extends Model
{
    protected $table = 'ruta';
    protected $guarded = ['id'];
    protected $fillable = ['nombre', 'estado'];

    public static function Mostrar($estado)
    {
        return Ruta::where('estado', $estado)
                    ->select('ruta.*')->OrderBy('nombre', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return Ruta::find($id)->first();
    }     

    public static function Crear(Request $request)
    {
        $data = new Ruta();
        $data->nombre = $requet->nombre;     

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = Ruta::findOrFail($id);
        $data->nombre = $requet->nombre;

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = Ruta::findOrFail($id);

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

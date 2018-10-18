<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Sexo extends Model
{
    protected $table = 'sexo';
    protected $guarded = ['id'];
    protected $fillable = ['nombre', 'estado'];

    public static function Mostrar($estado)
    {
        return Sexo::where('estado', $estado)
                    ->select('sexo.*')->OrderBy('nombre', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return Sexo::find($id)->first();
    }     

    public static function Crear(Request $request)
    {
        $data = new Sexo();
        $data->nombre = $requet->nombre;     

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = Sexo::findOrFail($id);
        $data->nombre = $requet->nombre;

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = Sexo::findOrFail($id);

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

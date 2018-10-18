<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TipoReferencia extends Model
{
    protected $table = 'tipo_referencia';
    protected $guarded = ['id'];
    protected $fillable = ['nombre', 'estado'];

    public static function Mostrar($estado)
    {
        return TipoReferencia::where('estado', $estado)
                    ->select('tipo_referencia.*')->OrderBy('nombre', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return TipoReferencia::find($id)->first();
    }     

    public static function Crear(Request $request)
    {
        $data = new TipoReferencia();
        $data->nombre = $requet->nombre;     

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = TipoReferencia::findOrFail($id);
        $data->nombre = $requet->nombre;

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = TipoReferencia::findOrFail($id);

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

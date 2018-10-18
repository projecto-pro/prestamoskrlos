<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TipoPrestamo extends Model
{
    protected $table = 'tipo_prestamo';
    protected $guarded = ['id'];
    protected $fillable = ['nombre', 'descripcion', 'estado'];

    public static function Mostrar($estado)
    {
        return TipoPrestamo::where('estado', $estado)
                    ->select('tipo_prestamo.*')->OrderBy('nombre', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return TipoPrestamo::find($id)->first();
    }     

    public static function Crear(Request $request)
    {
        $data = new TipoPrestamo();
        $data->nombre = $requet->nombre;     
        $data->descripcion = $requet->descripcion;  

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = TipoPrestamo::findOrFail($id);
        $data->nombre = $requet->nombre;
        $data->descripcion = $requet->descripcion; 
        
        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = TipoPrestamo::findOrFail($id);

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

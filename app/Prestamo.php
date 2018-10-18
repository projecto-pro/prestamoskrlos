<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;

class Prestamo extends Model
{
    protected $table = 'prestamo';
    protected $guarded = ['id', 'fkcliente', 'fkdia', 'fkuser', 'fktipo_prestamo', 'fkruta'];
    protected $fillable = ['cantidad_cuota', 'descripcion', 'interes', 'monto_total', 'cuota', 'fecha', 'estado'];

    public static function Mostrar($estado)
    {
        return Prestamo::join('cliente', 'prestamo.fkcliente', 'cliente.id')
                    ->join('dia', 'prestamo.fkdia', 'dia.id')
                    ->join('users', 'prestamo.fkuser', 'users.id')
                    ->join('tipo_prestamo', 'prestamo.fktipo_prestamo', 'tipo_prestamo.id')
                    ->join('ruta', 'prestamo.fkruta', 'ruta.id')
                    ->where('prestamo.estado', $estado)
                    ->select('prestamo.*', 'cliente.nombres as cliente_nombres', 'cliente.apellidos as cliente_apellidos', 'user.nombres as user_nombres', 'user.apellidos as user_apellidos', 'dia.nombre as dia_nombre', 'tipo_prestamo.nombre as tipo_prestamo_nombre', 'ruta.nombre as ruta_nombre')->OrderBy('prestamo.id', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return Prestamo::find($id)->first();
    }     

    public static function Crear(Request $request)
    {
        $data = new Prestamo();
        $data->cantidad_cuota = $requet->cantidad_cuota;
        $data->descripcion = $requet->descripcion;
        $data->interes = $requet->interes;
        $data->monto_total = $requet->monto_total;
        $data->cuota = $requet->cuota;
        $data->fecha = date_format($requet->fecha,"Y-m-d");
        $data->fkcliente = $requet->fkcliente;
        $data->fkdia = $requet->fkdia;
        $data->fkuser = Auth::user()->id;
        $data->fktipo_prestamo = $requet->fktipo_prestamo;
        $data->fkruta = $requet->fkruta;        

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = Prestamo::findOrFail($id);
        $data->cantidad_cuota = $requet->cantidad_cuota;
        $data->descripcion = $requet->descripcion;
        $data->interes = $requet->interes;
        $data->monto_total = $requet->monto_total;
        $data->cuota = $requet->cuota;
        $data->fecha = date_format($requet->fecha,"Y-m-d");
        $data->fkcliente = $requet->fkcliente;
        $data->fkdia = $requet->fkdia;
        $data->fkuser = Auth::user()->id;
        $data->fktipo_prestamo = $requet->fktipo_prestamo;
        $data->fkruta = $requet->fkruta;      

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = Prestamo::findOrFail($id);

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

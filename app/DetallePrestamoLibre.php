<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DetallePrestamoLibre extends Model
{
    protected $table = 'detalle_prestamo_libre';
    protected $guarded = ['id', 'fkprestamo'];
    protected $fillable = ['correlativo', 'monto_mas_interes', 'sub_total', 'total', 'fecha', 'pago'];

    public static function Mostrar($pago)
    {
        return DetallePrestamoLibre::join('prestamo', 'detalle_prestamo_libre.fkprestamo', 'prestamo.id')
                    ->where('detalle_prestamo_libre.pago', $pago)
                    ->select('detalle_prestamo_libre.*')->OrderBy('detalle_prestamo_libre.correlativo', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return DetallePrestamoLibre::where('fkprestamo', $id)->get();
    }     

    public static function Crear(Request $request)
    {
        $data = new DetallePrestamoLibre();
        $data->correlativo = $requet->correlativo;
        $data->monto_mas_interes = $requet->monto_mas_interes;
        $data->sub_total = $requet->sub_total;
        $data->total = $requet->total;
        $data->fecha = $requet->fecha;        
        $data->fkprestamo = $requet->fkprestamo;        

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = DetallePrestamoLibre::findOrFail($id);
        $data->correlativo = $requet->correlativo;
        $data->monto_mas_interes = $requet->monto_mas_interes;
        $data->sub_total = $requet->sub_total;
        $data->total = $requet->total;
        $data->fecha = $requet->fecha;        
        $data->fkprestamo = $requet->fkprestamo;      

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = DetallePrestamoLibre::findOrFail($id);

        switch ($data->pago) {
            case 1:
                $data->pago = 0;  
                break;
            
            case 0:
                $data->pago = 1;
                break;
        }      

        if($data->save()){ return true; }
        else { return false; }
    }

    public function Eliminar($id)
    {
        $data = DetallePrestamoLibre::findOrFail($id);
        if($data->delete()){ return true; }
        else { return false; }
    }
}

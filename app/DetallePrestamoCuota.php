<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DetallePrestamoCuota extends Model
{
    protected $table = 'detalle_prestamo_cuota';
    protected $guarded = ['id', 'fkprestamo'];
    protected $fillable = ['correlativo', 'debe', 'fecha', 'pago'];

    public static function Mostrar($pago)
    {
        return DetallePrestamoCuota::join('prestamo', 'detalle_prestamo_cuota.fkprestamo', 'prestamo.id')
                    ->where('detalle_prestamo_cuota.pago', $pago)
                    ->select('detalle_prestamo_cuota.*')->OrderBy('detalle_prestamo_cuota.correlativo', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return DetallePrestamoCuota::where('fkprestamo', $id)->get();
    }     

    public static function Crear(Request $request)
    {
        $data = new DetallePrestamoCuota();
        $data->correlativo = $requet->correlativo;
        $data->debe = $requet->debe;
        $data->fecha = $requet->fecha;
        $data->fkprestamo = $requet->fkprestamo;        

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = DetallePrestamoCuota::findOrFail($id);
        $data->correlativo = $requet->correlativo;
        $data->debe = $requet->debe;
        $data->fecha = $requet->fecha;
        $data->fkprestamo = $requet->fkprestamo;     

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = DetallePrestamoCuota::findOrFail($id);

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
        $data = DetallePrestamoCuota::findOrFail($id);
        if($data->delete()){ return true; }
        else { return false; }
    }                    
}

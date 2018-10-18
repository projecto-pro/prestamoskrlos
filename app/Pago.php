<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;

class Pago extends Model
{
    protected $table = 'pago';
    protected $guarded = ['id', 'fkdetalle_prestamo_cuota', 'fkuser'];
    protected $fillable = ['fecha', 'estado'];

    public static function Mostrar($estado)
    {
        return Pago::join('detalle_prestamo_cuota', 'pago.fkdetalle_prestamo_cuota', 'detalle_prestamo_cuota.id')
        			->join('users', 'pago.fkuser', 'users.id')
       				->where('pago.estado', $estado)
                    ->select('pago.*')->OrderBy('users.nombres', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return Pago::where('fkuser', $id)->get();
    }     

    public static function Crear(Request $request)
    {
        $data = new Pago();
        $data->fkdetalle_prestamo_cuota = $requet->fkdetalle_prestamo_cuota;   
        $data->fkuser = Auth->users()->id;         

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = Pago::findOrFail($id);
        $data->fkdetalle_prestamo_cuota = $requet->fkdetalle_prestamo_cuota;     

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = Pago::findOrFail($id);

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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;

class Abonar extends Model
{
    protected $table = 'abonar';
    protected $guarded = ['id', 'fkdetalle_prestamo_libre', 'fktipo_abono', 'fkuser'];
    protected $fillable = ['monto', 'fecha', 'estado'];

    public static function Mostrar($estado)
    {
        return Abonar::join('detalle_prestamo_libre', 'abonar.fkdetalle_prestamo_libre', 'detalle_prestamo_libre.id')
        			->join('tipo_abono', 'abonar.fktipo_abono', 'tipo_abono.id')
        			->join('users', 'abonar.fkuser', 'users.id')
       				->where('abonar.estado', $estado)
                    ->select('abonar.*')->OrderBy('users.nombres', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return Abonar::where('fkuser', $id)->get();
    }     

    public static function Crear(Request $request)
    {
        $data = new Abonar();
        $data->monto = $requet->monto;          
        $data->fktipo_abono = $requet->fktipo_abono; 
        $data->fkdetalle_prestamo_cuota = $requet->fkdetalle_prestamo_cuota;   
        $data->fkuser = Auth->users()->id;         

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = Abonar::findOrFail($id);
        $data->monto = $requet->monto;          
        $data->fktipo_abono = $requet->fktipo_abono; 
        $data->fkdetalle_prestamo_cuota = $requet->fkdetalle_prestamo_cuota;   
        $data->fkuser = Auth->users()->id;       

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = Abonar::findOrFail($id);

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

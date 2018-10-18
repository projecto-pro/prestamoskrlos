<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $guarded = ['id', 'fksexo'];
    protected $fillable = ['cui', 'nombres', 'apellidos', 'telefono', 'celular', 'direccion_trabajo', 'direccion', 'estado'];

    public static function Mostrar($estado)
    {
        return Cliente::join('sexo', 'cliente.fksexo', 'sexo.id')
                    ->where('cliente.estado', $estado)
                    ->select('cliente.*', 'sexo.nombre as sexo_nombre')->OrderBy('cliente.nombres', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return Cliente::find($id)->first();
    }     

    public static function Crear(Request $request)
    {
        $data = new Cliente();
        $data->cui = $requet->cui;
        $data->nombres = $requet->nombres;
        $data->apellidos = $requet->apellidos;
        $data->telefono = $requet->telefono;
        $data->celular = $requet->celular;
        $data->direccion_trabajo = $requet->direccion_trabajo;
        $data->direccion = $requet->direccion;
        $data->fksexo = $requet->fksexo;        

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = Cliente::findOrFail($id);
        $data->cui = $requet->cui;
        $data->nombres = $requet->nombres;
        $data->apellidos = $requet->apellidos;
        $data->telefono = $requet->telefono;
        $data->celular = $requet->celular;
        $data->direccion_trabajo = $requet->direccion_trabajo;
        $data->direccion = $requet->direccion;
        $data->fksexo = $requet->fksexo;       

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = Cliente::findOrFail($id);

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

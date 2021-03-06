<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $guarded = ['id', 'fkrol', 'fksexo'];
    protected $fillable = ['cui', 'nombres', 'apellidos', 'telefono', 'celular', 'direccion_trabajo', 'direccion', 'usuario', 'estado', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

    public static function Mostrar($estado)
    {
        return User::join('rol', 'users.fkrol', 'rol.id')
                    ->join('sexo', 'users.fksexo', 'sexo.id')
                    ->where('users.estado', $estado)
                    ->select('users.*', 'rol.nombre as rol_nombre', 'sexo.nombre as sexo_nombre')->OrderBy('users.nombres', 'asc')->get();
    } 

    public static function Seleccionar($id)
    {
        return User::find($id)->first();
    }     

    public static function Crear(Request $request)
    {
        $data = new User();
        $data->cui = $requet->cui;
        $data->nombres = $requet->nombres;
        $data->apellidos = $requet->apellidos;
        $data->telefono = $requet->telefono;
        $data->celular = $requet->celular;
        $data->direccion_trabajo = $requet->direccion_trabajo;
        $data->direccion = $requet->direccion;
        $data->usuario = $requet->usuario;
        $data->email = $requet->email;
        $data->password = encrypt($requet->password);
        $data->fkrol = $requet->fkrol;
        $data->fksexo = $requet->fksexo;        

        if($data->save()){ return true; }
        else { return false; }
    } 

    public static function Modificar(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->cui = $requet->cui;
        $data->nombres = $requet->nombres;
        $data->apellidos = $requet->apellidos;
        $data->telefono = $requet->telefono;
        $data->celular = $requet->celular;
        $data->direccion_trabajo = $requet->direccion_trabajo;
        $data->direccion = $requet->direccion;
        $data->usuario = $requet->usuario;
        $data->email = $requet->email;
        $data->fkrol = $requet->fkrol;
        $data->fksexo = $requet->fksexo;        

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Password(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->password = encrypt($requet->password);    

        if($data->save()){ return true; }
        else { return false; }
    }  

    public static function Estado($id)
    {
        $data = User::findOrFail($id);

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

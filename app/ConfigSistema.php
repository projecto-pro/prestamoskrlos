<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigSistema extends Model
{
    protected $table = 'config_sistema';
    protected $guarded = ['id'];
    protected $fillable = ['logotipo', 'nombre', 'telefono', 'cod_mercantil', 'email'];
}

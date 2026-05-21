<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alimentos extends Model
{
    protected $table = 'tbl_alimentos';//tabela para controlar alimentos da casa
    protected $primaryKey = 'id_alimento';
    protected $fillable =["nomeAlimento", "tipoAlimento", "quantidade"];
    protected $hidden = ['created_at', 'updated_at'];
}

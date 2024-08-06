<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;
    protected $table = 'permisos';
    protected $primaryKey = 'idPermiso';
	protected $fillable = [
		'grupo',
		'permiso',
	];
}

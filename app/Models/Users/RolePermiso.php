<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermiso extends Model
{
    use HasFactory;
    protected $table      = 'role_permiso';
	protected $primaryKey = 'idRole_permiso';

	protected $fillable = [
		'idRole',
		'idPermiso'
	];

    public function role()
    {
    return $this->belongsTo(Role::class, 'idRole');
    }

    public function permiso()
    {
    return $this->belongsTo(Permiso::class, 'idPermiso');
    }
}

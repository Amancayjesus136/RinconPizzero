<?php

namespace App\Models\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'id_role';
	protected $fillable = [
		'role',
		'acceso_admin'
	];

    public function users()
    {
        return $this->belongsToMany(User::class, 'roles_usuarios', 'idRole', 'idUsuario');
    }

	public function rolePermisos()
    {
        return $this->hasMany(RolePermiso::class, 'idRole', 'id_role');
    }
}

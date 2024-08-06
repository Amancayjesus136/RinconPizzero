<?php

namespace App\Models\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUsuario extends Model
{
    use HasFactory;
    protected $table = 'roles_usuarios';
    protected $primaryKey = 'idRoleUsuario';

    protected $fillable = [
        'idRole',
        'idUsuario',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'idRole');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id');
    }
}

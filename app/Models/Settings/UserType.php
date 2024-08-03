<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;
    protected $table = 'user_types';
    protected $primaryKey = 'id_user_type';
    protected $fillable =
    [
        'name_user_type',
        'description_user_type',
        'status_user_type'
    ];
}

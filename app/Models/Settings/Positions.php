<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    use HasFactory;
    protected $table = 'positions';
    protected $primaryKey = 'id_position';
    protected $fillable =
    [
        'name_position',
        'description_position',
        'status_position'
    ];
}

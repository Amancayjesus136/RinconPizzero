<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    use HasFactory;
    protected $table = 'nationalities';
    protected $primaryKey = 'id_nationality';
    protected $fillable =
    [
        'name_national',
        'status_nationality',
    ];
}

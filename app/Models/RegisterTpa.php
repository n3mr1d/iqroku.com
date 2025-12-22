<?php

namespace App\Models;

use App\Enum\Gander;
use App\Enum\LevelTPA;
use Illuminate\Database\Eloquent\Model;

class RegisterTpa extends Model
{
    protected $table = 'tparegisters';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name_father',
        'name_mother',
        'whatsapp',
        'name',
        'gender',
        'datebirth',
        'tpalama',
        'leveltpa',
        'pendampingan',
        'saran',
    ];

    protected $casts = [
        'datebirth' => 'date',
        'tpalama' => 'boolean',
        'gender' => Gander::class,
        'leveltpa' => LevelTPA::class,
        'pendampingan' => 'boolean',
    ];
}

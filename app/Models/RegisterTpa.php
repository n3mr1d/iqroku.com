<?php

namespace App\Models;

use App\Enum\Gander;
use App\Models\User;
use App\Enum\LevelTPA;
use App\Events\RegisterNewTpa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
        'user_id',
        'whatsapp',
        'email',
        'name',
        'gender',
        'datebirth',
        'tpalama',
        'leveltpa',
        'pendampingan',
        'saran',
    ];
    protected $dispatchesEvents = [
        'created' => RegisterNewTpa::class,
    ];
    protected $casts = [
        'datebirth' => 'date',
        'tpalama' => 'boolean',
        'gender' => Gander::class,
        'leveltpa' => LevelTPA::class,
        'pendampingan' => 'boolean',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

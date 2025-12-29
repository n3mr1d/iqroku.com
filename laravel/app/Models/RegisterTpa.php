<?php

namespace App\Models;

use App\Enum\Gander;
use App\Enum\LevelTPA;
use App\Enum\StatusRegister;
use App\Events\RegisterNewTpa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterTpa extends Model
{
    use HasFactory;

    protected $table = 'tparegisters';

    protected $factory = 'RegisterTpaFactory';

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
        'status',
        'admin_notes',
        'approved_at',
        'approved_by',
        'group',
    ];

    protected $dispatchesEvents = [
        'created' => RegisterNewTpa::class,
    ];

    protected $casts = [
        'datebirth' => 'date',
        'tpalama' => 'boolean',
        'status' => StatusRegister::class,
        'gender' => Gander::class,
        'leveltpa' => LevelTPA::class,
        'pendampingan' => 'boolean',
        'approved_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    // Scope untuk filter by status
    public function scopeWaiting($query)
    {
        return $query->where('status', 'waiting');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }
}

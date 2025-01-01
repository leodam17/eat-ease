<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Users extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';

    protected $fillable = [
        'nama',
        'password',
        'email',
        'preferensi',
        'alergi',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }

    public function riwayat()
    {
        return $this->hasMany(RiwayatUser::class, 'id_user');
    }
}

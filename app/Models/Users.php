<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'nama',
        'password',
        'email',
        'preferensi',
        'alergi',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }

    public function riwayat()
    {
        return $this->hasMany(RiwayatUser::class, 'id_user');
    }
}

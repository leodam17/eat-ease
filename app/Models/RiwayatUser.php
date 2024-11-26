<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatUser extends Model
{
    use HasFactory;

    protected $table = 'riwayat_user';

    protected $fillable = [
        'id_pesanan',
        'id_user',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_pesanan');
    }

    public function user()
    {
        return $this->belongsTo(Users::class, 'id_user');
    }
}

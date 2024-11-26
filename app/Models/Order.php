<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    protected $fillable = [
        'user_id',
        'nama_pesanan',
        'status_pesanan',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function riwayat()
    {
        return $this->hasOne(RiwayatUser::class, 'id_pesanan');
    }
}

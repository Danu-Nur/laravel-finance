<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',      // Referensi ke pengguna yang memiliki aset
        'name',         // Nama atau deskripsi aset
        'value',        // Nilai aset dalam satuan mata uang yang diinginkan
        'purchase_date' // Tanggal aset dibeli atau diperoleh
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

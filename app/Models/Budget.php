<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'amount', 'percentage', 'start_date', 'end_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

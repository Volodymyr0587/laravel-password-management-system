<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    use HasFactory;

    protected $fillable = [
        'resource',
        'login',
        'password',
        'additional_info'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'categoria','user_id'];

    public function dono()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

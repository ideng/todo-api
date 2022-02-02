<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama'
    ];

    public function subtodos()
    {
        return $this->hasMany(Subtodo::class);
    }
}

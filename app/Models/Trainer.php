<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'specialization', 'experience_years'];

    public function sessions() {
        return $this->hasMany(Session::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'contact_number', 'membership_type'];

    public function sessions() {
        return $this->hasMany(Session::class);
    }
}

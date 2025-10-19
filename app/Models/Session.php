<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = ['member_id', 'trainer_id', 'session_date', 'duration'];

    public function member() {
        return $this->belongsTo(Member::class);
    }

    public function trainer() {
        return $this->belongsTo(Trainer::class);
    }
}

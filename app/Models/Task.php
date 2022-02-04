<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'person_in_charge',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function sector() {
        return $this->belongsTo('App\Models\Sector');
    }
}

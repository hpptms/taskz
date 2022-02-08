<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'u_id',
        's_id',
        'title',
        'content',
        'se_id',
    ];

    /**
     * hasOne associations.
     *
     * @var array
     */
    public function user() {
        return $this->hasOne('App\Models\User');
    }

    public function sector() {
        return $this->hasOne('App\Models\Sector');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * belongsTo associations.
     *
     * @var array
     */
    public function task() {
        return $this->belongsTo('App\Models\Task');
    }
}

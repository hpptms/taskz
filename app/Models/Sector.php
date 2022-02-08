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
     * hasOne associations.
     *
     * @var array
     */
    public function task() {
        return $this->hasOne('App\Models\Task');
    }

    public function getname()
    {
        return $this->name;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excursion extends Model
{
    protected $fillable = [
        'name', 'conDate', 'duration', 'typeTransport', 'organisator'
    ];

    public function organisator()
    {
        return $this->hasMany(organisator::class);
    }
}

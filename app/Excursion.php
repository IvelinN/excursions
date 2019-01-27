<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excursion extends Model
{
    protected $fillable = [
        'name', 'conDate', 'duration', 'typeTransport', 'organisator'
    ];

    protected $guarded =[];

    public function organisator()
    {
        return $this->hasMany(Organisator::class);
    }
}

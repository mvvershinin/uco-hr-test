<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'isActive',
        'age',
        'eyeColor',
        'name',
        'gender',
        'company',
        'email',
        'phone',
        'address',
    ];

    public $timestamps = false;

    public function scopeActive(Builder $query)
    {
        $query->where('isActive', true);
    }
}

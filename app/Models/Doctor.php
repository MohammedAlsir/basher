<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function specialist()
    {
        return $this->belongsTo('App\Models\Specialist');
    }
}

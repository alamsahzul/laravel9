<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Lecture extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function departement()
    {
        return $this->belongsTo(Deparment::class, 'departement_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $attributes = ([
        'date',
        'muscle_group',
        'duration'
    ]);

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = ([
        'date',
        'muscle_group',
        'duration_hrs'
    ]);

    public function __construct(array $fillable = [])
    {
        parent::__construct($fillable);
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }


}
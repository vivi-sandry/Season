<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'email',
    ];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function disciplines()
    {
        return $this->belongsToMany(Discipline::class);
    }
}

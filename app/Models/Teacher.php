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
        //retorno de relacionamento um para muitos team e teacher
        return $this->hasMany(Team::class);
    }

    public function disciplines()
    {
        //relacionamento
        return $this->belongsToMany(Discipline::class);
    }
}

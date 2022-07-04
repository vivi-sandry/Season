<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
    ];

    public function disciplines()
    {
        //retorno relacionamento um para muitos category e dicipline
        return $this->hasMany(Discipline::class);
    }
}

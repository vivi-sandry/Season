<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'max_student',
    ];

    public function teams()
    {
        //retorno de relacionamento um para muitos classroom e team
        return $this->hasMany(Team::class);
    }
}

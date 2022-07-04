<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function cartegory()
    {
        //relacionamento muitos para um dicipline e category
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'started_at',
        'ended_at',
        'scheduled_at',
        'duration',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}

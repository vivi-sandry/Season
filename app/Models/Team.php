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
        //relacionamento muitos para muitos team e student
        return $this->belongsToMany(Student::class);
    }

    public function classroom()
    {
        //relacionamento muitos para um team e classroom
        return $this->belongsTo(Classroom::class);
    }

    public function teacher()
    {
        //relacionamento muitos para um team e teacher
        return $this->belongsTo(Teacher::class);
    }
}

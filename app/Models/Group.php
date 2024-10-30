<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'major_id',
        'name',
        'course_id'
    ];

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'group_id');
    }
}

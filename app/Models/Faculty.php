<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'university_id',
        'name',
    ];

    public function university()
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function majors()
    {
        return $this->hasMany(Major::class, 'faculty_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'name',
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'address_id');
    }
}

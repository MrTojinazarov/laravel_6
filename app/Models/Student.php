<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'group_id',
        'address_id',
        'name',
        'phone',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }
}

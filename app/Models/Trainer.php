<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ['user_id', 'is_enabled',  'image', 'name', 'role', 'description', 'experience', 'speciality', 'certification'];
    public function User()
    {
        return $this->belongsTo('users::class');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'deadline',
        'user_id',
        'client_id',
        'status'
    ];
}

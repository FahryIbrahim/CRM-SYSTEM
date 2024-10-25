<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'project_id',
        'user_id',
        'status',
        'due_date'
    ];
}

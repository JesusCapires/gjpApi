<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskAssignment extends Model
{
    protected $table = 'tasks_assigment';
    
    protected $fillable = [
        'task_id',
        'user_id'
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

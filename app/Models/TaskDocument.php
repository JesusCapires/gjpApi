<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskDocument extends Model
{
    protected $table = 'task_documents';
    
    protected $fillable = [
        'task_id',
        'path'
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}

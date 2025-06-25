<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
        'name',
        'description',
        'priority',
        'type',
        'date_start',
        'date_end',
        'status',
        'id_project'
    ];

    public function documents()
    {
        return $this->hasMany(TaskDocument::class, 'id_task');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'id_project');
    }

    public function assignments()
    {
        return $this->hasMany(TaskAssignment::class, 'id_task');
    }
}

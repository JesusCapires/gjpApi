<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'name',
        'description',
        'priority',
        'date_start',
        'date_end',
        'status',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'id_project');
    }

    public function documents()
    {
        return $this->hasMany(ProjectDocument::class, 'id_project');
    }

    public function assignments()
    {
        return $this->hasMany(ProjectAssignment::class, 'id_project');
    }
}

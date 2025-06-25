<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectDocument extends Model
{
    protected $table = 'project_documents';
    
    protected $fillable = [
        'project_id',
        'path'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}


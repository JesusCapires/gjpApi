<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'name' => 'Desarrollo de Aplicación Web',
            'description' => 'Desarrollo completo de una aplicación web moderna',
            'priority' => 'Alta',
            'date_start' => '2025-07-01',
            'date_end' => '2025-09-30',
            'status' => 'En progreso'
        ]);

        Project::create([
            'name' => 'Optimización de Base de Datos',
            'description' => 'Optimización del rendimiento de la base de datos existente',
            'priority' => 'Media',
            'date_start' => '2025-07-15',
            'date_end' => '2025-08-31',
            'status' => 'Pendiente'
        ]);

        Project::create([
            'name' => 'Implementación de API',
            'description' => 'Desarrollo e implementación de una nueva API REST',
            'priority' => 'Alta',
            'date_start' => '2025-07-01',
            'date_end' => '2025-08-15',
            'status' => 'En progreso'
        ]);

        Project::create([
            'name' => 'Mantenimiento de Sistema',
            'description' => 'Mantenimiento preventivo del sistema actual',
            'priority' => 'Baja',
            'date_start' => '2025-07-01',
            'date_end' => '2025-12-31',
            'status' => 'Pendiente'
        ]);
    }
}

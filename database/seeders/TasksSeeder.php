<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    public function run()
    {
        // Tarea 1 para el proyecto 1
        Task::create([
            'name' => 'Configuración del Entorno de Desarrollo',
            'description' => 'Configurar el entorno de desarrollo para el proyecto',
            'priority' => 'Alta',
            'type' => 'Alta',
            'date_start' => '2025-07-01',
            'date_end' => '2025-07-02',
            'status' => 'Pendiente',
            'id_project' => 1
        ]);

        // Tarea 2 para el proyecto 1
        Task::create([
            'name' => 'Desarrollo de Frontend',
            'description' => 'Desarrollar la interfaz de usuario',
            'priority' => 'Alta',
            'type' => 'Alta',
            'date_start' => '2025-07-03',
            'date_end' => '2025-07-15',
            'status' => 'Pendiente',
            'id_project' => 1
        ]);

        // Tarea 3 para el proyecto 2
        Task::create([
            'name' => 'Análisis de Consultas',
            'description' => 'Analizar y optimizar las consultas SQL',
            'priority' => 'Media',
            'type' => 'Alta',
            'date_start' => '2025-07-15',
            'date_end' => '2025-07-20',
            'status' => 'Pendiente',
            'id_project' => 2
        ]);

        // Tarea 4 para el proyecto 3
        Task::create([
            'name' => 'Diseño de Endpoints',
            'description' => 'Diseñar los endpoints de la nueva API',
            'priority' => 'Alta',
            'type' => 'Alta',
            'date_start' => '2025-07-01',
            'date_end' => '2025-07-05',
            'status' => 'Pendiente',
            'id_project' => 3
        ]);
    }
}

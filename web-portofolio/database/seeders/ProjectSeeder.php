<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Project::create([
            'title' => 'Electronic School Liaison',
            'description' => 'Platform manajemen sekolah',
            'tech_stack' => 'Laravel, Vue',
        ]);

        \App\Models\Project::create([
            'title' => 'Laba Pintar',
            'description' => 'Aplikasi kalkulator profit bisnis',
            'tech_stack' => 'React, Node.js',
        ]);

        \App\Models\Project::create([
            'title' => 'Foleygen',
            'description' => 'Platform AI generatif untuk efek suara',
            'tech_stack' => 'Python, TensorFlow',
        ]);
    }
}

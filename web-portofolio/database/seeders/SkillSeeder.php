<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Skill::create([
            'name' => 'Java',
            'category' => 'Backend'
        ]);

        \App\Models\Skill::create([
            'name' => 'PL/SQL',
            'category' => 'Database'
        ]);

        \App\Models\Skill::create([
            'name' => 'React',
            'category' => 'Frontend'
        ]);

        \App\Models\Skill::create([
            'name' => 'Mikrotik RouterOS',
            'category' => 'Networking'
        ]);
    }
}

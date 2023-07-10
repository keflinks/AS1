<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = [
            'A1',
            'A2',
            'A3',
            'A4',
            'B1',
            'B2',
            'B3',
            'D4',
            'D5',
        ];

        foreach ($classrooms as $classroom) {
            $obj = new Classroom();
            $obj->name = $classroom;
            $obj->save();
        }
    }
}

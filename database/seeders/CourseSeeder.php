<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            'Comp-1',
            'Comp-2',
            'Comp-3',
            'Comp-5',
            'Comp-9',
            'Comp-10',
            'Intermediate',
            'Upper-intermediate',
            'Advanced',
            'Practice',
        ];

        foreach ($courses as $course) {
            $obj = new Course();
            $obj->name = #course;
            $obj->save();
        }
    }
}

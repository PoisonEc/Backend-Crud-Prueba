<?php

namespace Database\Seeders;

use App\Features\Department\Models\Department;
use App\Features\JobTitle\Models\JobTitle;
use App\Features\User\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->generateDepartments();
        $this->generateJobTitles();
        $this->generateUsers();
    }

    public function generateDepartments(): void
    {
        $json = File::get(database_path('data/departments.json'));
        $data = json_decode($json, true);
        
        foreach ($data as $i) {
            Department::create($i);
        }
    }

    public function generateJobTitles(): void
    {
        $json = File::get(database_path('data/job_titles.json'));
        $data = json_decode($json, true);

        foreach ($data as $i) {
            JobTitle::create($i);
        }
    }

    public function generateUsers(): void
    {
        $departments = Department::all();
        $jobTitles = JobTitle::all();

        if ($departments->isEmpty()) {
            $this->command->warn('No departments found. Please seed departments first.');
            return;
        }

        if ($jobTitles->isEmpty()) {
            $this->command->warn('No job titles found. Please seed job titles first.');
            return;
        }

        $json = File::get(database_path('data/users.json'));
        $data = json_decode($json, true);

        foreach ($data as $i) {
            User::create($i);
        }
    }
}

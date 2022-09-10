<?php

namespace Database\Seeders;

use App\Models\Salary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(public_path("data/Salary_Survey.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Salary::create([
                    "timestamp" => $data['0'],
                    "permission" => $data['1'],
                    "gender" => $data['2'],
                    "postal_code" => $data['3'],
                    "education" => $data['4'],
                    "education_institution" => $data['5'],
                    "years_of_experience" => $data['6'],
                    "employment_commitment" => $data['7'],
                    "employment_type" => $data['8'],
                    "job_category" => $data['9'],
                    "monthly_salary" => (int)$data['10'],
                    "job_title" => $data['11']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
        $years = request(['years_of_xp']);
        $salaries = Salary::all();

        if (!empty($years)) {
            $salaries = $salaries->where('years_of_experience', '=', $years['years_of_xp']);
        }
        return view('salaries', [
            'salaries' => $salaries,
            'current_years_xp' => $years['years_of_xp'],
            'years_xp_options' => Salary::distinct()->get(['years_of_experience'])->pluck('years_of_experience')
        ]);
    }
}

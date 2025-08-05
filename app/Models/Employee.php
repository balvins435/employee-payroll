<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gross_salary'];

    public function calculatePayroll()
    {
        $shif = 500; // Fixed SHIF deduction
        $housing_levy = 500; // Fixed Housing Levy deduction
        $paye = $this->gross_salary * 0.3; // 30% PAYE
        $total_deductions = $shif + $housing_levy + $paye;
        $net_salary = $this->gross_salary - $total_deductions;

        return [
            'gross_salary' => $this->gross_salary,
            'shif' => $shif,
            'housing_levy' => $housing_levy,
            'paye' => $paye,
            'total_deductions' => $total_deductions,
            'net_salary' => $net_salary
        ];
    }
}
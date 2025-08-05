@extends('layouts.app')

@section('content')
    <h1>Payroll for {{ $employee->name }}</h1>
    <table class="table table-bordered">
        <tr>
            <th>Gross Salary</th>
            <td>{{ number_format($payroll['gross_salary'], 2) }}</td>
        </tr>
        <tr>
            <th>SHIF Deduction</th>
            <td>{{ number_format($payroll['shif'], 2) }}</td>
        </tr>
        <tr>
            <th>Housing Levy</th>
            <td>{{ number_format($payroll['housing_levy'], 2) }}</td>
        </tr>
        <tr>
            <th>PAYE (30%)</th>
            <td>{{ number_format($payroll['paye'], 2) }}</td>
        </tr>
        <tr>
            <th>Total Deductions</th>
            <td>{{ number_format($payroll['total_deductions'], 2) }}</td>
        </tr>
        <tr>
            <th>Net Salary</th>
            <td>{{ number_format($payroll['net_salary'], 2) }}</td>
        </tr>
    </table>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
@endsection
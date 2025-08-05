@extends('layouts.app')

@section('content')
    <h1>Employees</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Add Employee</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gross Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ number_format($employee->gross_salary, 2) }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('employees.payroll', $employee) }}" class="btn btn-sm btn-info">Payroll</a>
                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
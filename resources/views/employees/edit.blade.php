@extends('layouts.app')

@section('content')
    <h1>Edit Employee</h1>
    <form action="{{ route('employees.update', $employee) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $employee->name }}" required>
        </div>
        <div class="mb-3">
            <label for="gross_salary" class="form-label">Gross Salary</label>
            <input type="number" name="gross_salary" id="gross_salary" class="form-control" value="{{ $employee->gross_salary }}" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
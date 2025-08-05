@extends('layouts.app')

@section('content')
    <h1>Add Employee</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="gross_salary" class="form-label">Gross Salary</label>
            <input type="number" name="gross_salary" id="gross_salary" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-3">Employee List</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-dark float-end">Add Employee</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($employees->count() > 0)
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->mobile }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->city }}</td>
                <td>
                    <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4">No employees found</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

@endsection
@extends('layouts.app')

@section('content')
<h1>Employee Details</h1>
@php 
$employees=App\Models\Employee::all();
@endphp
@foreach($employees as $employee)
    <p><strong>Name:</strong> {{ $employee->name }}</p>
    <p><strong>Email:</strong> {{ $employee->email }}</p>
    <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
    <form method="POST" action="{{ route('employees.destroy', $employee->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach
<a href="{{ route('employees.index') }}">Back to List</a>
@endsection
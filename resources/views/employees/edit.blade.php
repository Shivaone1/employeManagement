@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Employee</h1>
    <form method="POST" action="{{ route('employees.update', $employee) }}" class="form-control">
        @csrf
        @method('PUT')
        <label class="my-2" for="name">Name:</label>
        <input class="form-control" type="text" name="name" id="name" value="{{ $employee->name }}">
        <label class="my-2" for="email">Email:</label>
        <input class="form-control" type="email" name="email" id="email" value="{{ $employee->email }}">
        <button type="submit" class="my-3 btn btn-dark text-light border-0"><span class="">Update Employee</span></button>
    </form>
</div>

@endsection
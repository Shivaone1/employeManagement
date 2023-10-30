@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Employee</h1>
    <form method="POST" action="{{ route('employees.update', $employee) }}" class="form-control">
        @csrf
        @method('PUT')
        <label class="my-2" for="name">Name:</label>
        <input class="form-control" type="text" name="name" id="name" value="{{ $employee->name }}">
        <label class="my-2" for="Mobile">Mobile:</label>
        <input class="form-control" type="number" name="mobile" id="mobile" value="{{ $employee->mobile }}">
        <label class="my-2" for="email">Email:</label>
        <input class="form-control" type="email" name="email" id="email" value="{{ $employee->email }}">
        <label class="my-2" for="city">City:</label>
        <input class="form-control" type="text" name="city" id="city" value="{{ $employee->city }}">

        <a href="{{ route('employees.index') }}" class="btn btn-dark my-2">Back</a>

        <button type="submit" class="my-3 btn btn-dark text-light border-0"><span class="">Update Employee</span></button>
    </form>
</div>

@endsection
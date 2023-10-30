@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Employee</h1>
    <form method="POST" action="{{ route('employees.store') }}" class="form-control">
        @csrf
        <label class="my-2" for="name">Name:</label>
        <input class="form-control" type="text" name="name" id="name">
        <label class="my-2" for="email">Email:</label>
        <input class="form-control" type="email" name="email" id="email">
        <label class="my-2" for="mobile">Mobile:</label>
        <input class="form-control" type="number" name="mobile" id="mobile">
        <label class="my-2" for="city">City:</label>
        <input class="form-control" type="text" name="city" id="city">
        <label class="my-2" for="rote">Rote:</label>
        <input class="form-control" type="text" name="role" id="role">
        <div class="d-flex justify-content-between">
            <a href="{{ route('employees.index') }}" class="btn btn-dark my-2">Back</a>
            <button type="submit" class="btn btn-primary my-2">Create Employee</button>
        </div>
    </form>
</div>

@endsection
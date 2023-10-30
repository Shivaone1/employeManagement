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
        <label class="my-2" for="city">Cith:</label>
        <input class="form-control" type="text" name="city" id="city">
        <label class="my-2" for="rote">Rote:</label>
        <input class="form-control" type="text" name="role" id="role">
        <button type="submit" class="form-control -bottom-3 mt-3 bg-dark text-light">Create Employee</button>
    </form>
</div>

@endsection
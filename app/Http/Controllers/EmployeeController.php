<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    
    public function index()
    {
        $employees = Employee::all();
        // echo $employees;
        return view("employees.index", compact('employees'));
    }

    public function create()
    {
        // Return the view for creating a new employee
        return view("employees.create");
    }

    public function store(Request $request)
    {
        // Validate the input data before creating a new employee
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // Add more validation rules for other fields as needed
        ]);

        // Create a new employee with the validated data
        $employee = Employee::create($validatedData);
        
        // Check if the employee was successfully created
        if ($employee) {
            return redirect()->route('employees.index')->with('success', 'Data saved successfully.');
        } else {
            return redirect()->route('employees.index')->with('error', 'Data could not be saved.');
        }
    }

    public function show($id)
    {
        // Retrieve the employee with the given ID and pass it to the view
        $employee = Employee::find($id);

        return view("employees.show", compact('employee'));
    }

    public function edit($id)
    {
        // Retrieve the employee with the given ID and pass it to the edit view
        $employee = Employee::find($id);

        return view("employees.edit", compact('employee'));
    }

    public function update(Request $request, $id)
    {
        // Validate the input data before updating the employee
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // Add more validation rules for other fields as needed
        ]);

        // Find the employee with the given ID and update its data
        $employee = Employee::find($id);
        $employee->update($validatedData);

        // Check if the update was successful
        if ($employee) {
            return redirect()->route('employees.index')->with('success', 'Data updated successfully.');
        } else {
            return redirect()->route('employees.index')->with('error', 'Data could not be updated.');
        }
    }

    public function destroy($id)
    {
        // Find the employee with the given ID and delete it
        $employee = Employee::find($id);
        $employee->delete();

        // Check if the deletion was successful
        if ($employee) {
            return redirect()->route('employees.index')->with('success', 'Data deleted successfully.');
        } else {
            return redirect()->route('employees.index')->with('error', 'Data could not be deleted.');
        }
    }
}

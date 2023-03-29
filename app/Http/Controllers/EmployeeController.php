<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends ParentController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response['employees'] = Employee::all();
        return view('pages.employees.index')->with($response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $response['companies'] = Company::all();
        return view('pages.employees.create')->with($response);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        Employee::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company_id' => $request->company_id,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $response['alert-success'] = 'Employee created successfully!';
        return redirect()->route('employees.index')->with($response);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $response['employee'] = $employee;
        $response['companies'] = Company::all();
        return view('pages.employees.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company_id' => $request->company_id,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $response['alert-success'] = 'Employee updated successfully!';
        return redirect()->route('employees.index')->with($response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        $response['alert-success'] = 'Employee deleted successfully!';
        return redirect()->route('employees.index')->with($response);
    }
}

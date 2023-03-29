<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\ParentController;

class HomeController extends ParentController
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $response['company_count'] = Company::count();
        $response['employee_count'] = Employee::count();
        return view('pages.dashboard.index')->with($response);
    }
}

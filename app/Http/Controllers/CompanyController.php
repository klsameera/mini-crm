<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Mail\NewCompanyRegister;
use App\Models\Company;
use Illuminate\Support\Facades\Mail;

class CompanyController extends ParentController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response['companies'] = Company::all();
        return view('pages.companies.index')->with($response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        if ($request->hasFile('logos')) {
            $path = $request->file('logos')->store('public');
            $path = str_replace('public/', 'storage/', $path);
        } else {
            $path = null;
        }

        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $path,
            'website' => $request->website,
        ]);

        Mail::to($request->email)
            ->cc('team211@quardinternational.com')
            ->send(new NewCompanyRegister($company));

        $response['alert-success'] = 'Company created successfully!';
        return redirect()->route('companies.index')->with($response);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        $response['company'] = $company;
        return view('pages.companies.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        if ($request->hasFile('logos')) {
            $path = $request->file('logos')->store('public');
            $path = str_replace('public/', 'storage/', $path);
        } else {
            $path = $company->logo;
        }

        $company->update([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $path,
            'website' => $request->website,
        ]);

        $response['alert-success'] = 'Company updated successfully!';
        return redirect()->route('companies.index')->with($response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        $response['alert-success'] = 'Company deleted successfully!';
        return redirect()->route('companies.index')->with($response);
    }
}

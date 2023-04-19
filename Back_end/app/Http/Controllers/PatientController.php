<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();

        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
{
    
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => ['required', 'string', 'email', 'max:255'],  
        'password' => 'required',         
        'gender' => 'required|string|in:male,female',
        'date_of_birth' => 'required|date',
        'phone' => 'required|string',
        'address' => 'required|string',
        'assurance' => 'string'
    ]);

    try {
        $patient = Patient::create($validatedData);
        return response()->json(['success' => true, 'message' => 'Patient created successfully', 'data' => $patient], 200);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    }
}

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female',
            'date_of_birth' => 'required|date',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        $patient->update($validatedData);

        return redirect()->route('patients.index');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index');
    }
}
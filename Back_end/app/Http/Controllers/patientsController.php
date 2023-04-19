<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class patientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('test');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

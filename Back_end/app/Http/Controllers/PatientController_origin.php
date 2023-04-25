<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PatientController_origin extends Controller
{
    public function index()
    {
         $patients = Patients::all();
    $count = $patients->count();

    return response()->json([
        'patients' => $patients,
        'count' => $count
    ]);
    }

   


    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
{
    
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required | string | email | max:255 | unique:Patients',  
        'password' => 'required|string|min:6|confirmed',
        'gender' => 'required|string|in:male,female',
        'date_of_birth' => 'required|date',
        'phone' => 'required|string',
        'address' => 'required|string',
        'assurance' => 'string'
    ]);
    $hashedPassword = Hash::make($validatedData['password']);


    try {
        $patient = Patients::create($validatedData);
        $patient->password = $hashedPassword;
        $patient->save();
        return response()->json(['success' => true, 'message' => 'Patient created successfully', 'data' => $patient], 200);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    }
}


public function getPatient()
{
    $data = json_decode(request()->getContent());
    
    if ($data !== null && property_exists($data, "email")) {
        // $patient = $this->patientModel->getPatientByEmail($data->email);
        $patient = Patients::getPatientByEmail($data->email);

        if ($patient !== null) {
            return response()->json([
                "patientId" => $patient->id,
                "name" => $patient->name,
                // "lastName" => $patient->last_name,
            ]);
        }
    }
    
    return response()->json([
        "patient" => false,
    ]);
}
public function getPatientById($id){
    $data = Patients::getPatientById($id);
    // dd($data->phone);
    if ($data !== null ) {
            return response()->json($data);
    }
    
    return response()->json([
        "patient" => false,
    ]);
}


public function login(Request $request)
{
    $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $user = Auth::Patient();
            return response()->json([
                'user' => $user,
            ]);
        }
    

        return response()->json(['error' => 'Unauthorised'], 401);
    }



    public function edit(Patients $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patients $patient)
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

        $patient->update($validatedData);

        return response()->json(['message' => 'Patient updated successfully.']);
    }

    public function destroy($id) {
        $patient = Patients::findOrFail($id);
        $patient->delete();
    
        return response()->json(['message' => 'Patient deleted successfully.']);
    }
}
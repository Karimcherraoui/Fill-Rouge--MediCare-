<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class PatientController extends Controller
{
    public function index()
    {
         $patients = patients::all();
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
        'email' => 'required | string | email | max:255 | unique:patients',  
        'password' => 'required|string|min:6|confirmed',
        'password_confirmation' => 'required|string|min:6',
        'gender' => 'required|string|in:male,female',
        'date_of_birth' => 'required|date',
        'phone' => 'required|string',
        'address' => 'required|string',
        'assurance' => 'string'
    ]);
    // dd($validatedData);



    $hashedPassword = Hash::make($validatedData['password']);


    try {
        $patient = patients::create($validatedData);
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
        $patient = patients::getPatientByEmail($data->email);

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
    $data = patients::getPatientById($id);
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
//   dd($request->password);

    $email = $request->email;
    $password = $request->password;

    $patient = patients::where('email', $email)->first();

    if (!$patient) {
        return response()->json(['error' => 'Invalid email'], 401);
    }

    if (!Hash::check($password, $patient->password)) {
        return response()->json(['error' => 'Invalid password'], 401);
    }

    // At this point, the user has been authenticated
    // You can generate a token or perform other actions here

    return response()->json(['patient' => $patient]);
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
        $patient = patients::findOrFail($id);
        $patient->delete();
    
        return response()->json(['message' => 'Patient deleted successfully.']);
    }
}
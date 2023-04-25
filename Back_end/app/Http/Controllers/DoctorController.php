<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        $count = $doctors->count();
    
        return response()->json([
            'doctor' => $doctors,
            'count' => $count
        ]);
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required | string | email | max:255 | unique:doctors',  
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
            'gender' => 'required|string|in:male,female',
            'date_of_birth' => 'required|date',
            'phone' => 'required|string',
            'speciality' => 'required|string',

            'address' => 'required|string',
            'statut' => 'required|string',
        ]);
        $hashedPassword = Hash::make($validatedData['password']);


        try {
            $doctor = Doctor::create($validatedData);
            $doctor->password = $hashedPassword;
            $doctor->save();
            return response()->json(['success' => true, 'message' => 'doctor created successfully', 'data' => $doctor], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }


    public function getDoctorByspeciality()
{
    $data = json_decode(request()->getContent());
    
    if ($data !== null && property_exists($data, "speciality")) {
        // $patient = $this->patientModel->getPatientByEmail($data->email);
        $doctor = Doctor::getDoctorBySpeciality($data->speciality);

        if ($doctor !== null) {
            return response()->json($doctor);
        }
    }
    
    return response()->json([
        "patient" => false,
    ]);
}


    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
    
        $doctor = Doctor::where('email', $email)->first();
    
        if (!$doctor) {
            return response()->json(['error' => 'Invalid email'], 401);
        }
    
        if (!Hash::check($password, $doctor->password)) {
            return response()->json(['error' => 'Invalid password'], 401);
        }
    
        // At this point, the user has been authenticated
        // You can generate a token or perform other actions here
    
        return response()->json(['Doctor' => $doctor]);
    }

    public function show(Doctor $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'speciality' => 'required',
            'role' => 'required',
        ]);

        $doctor->update($validatedData);

        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully');
    }

    public function destroy($id) {
        $patient = Doctor::findOrFail($id);
        $patient->delete();
    
        return response()->json(['message' => 'Doctor deleted successfully.']);
    }
}
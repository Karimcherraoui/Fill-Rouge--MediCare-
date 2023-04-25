<?php

namespace App\Http\Controllers;

use App\Models\Nurse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nurses = Nurse::all();
        $count = $nurses->count();
    
        return response()->json([
            'nurse' => $nurses,
            'count' => $count
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nurses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required | string | email | max:255 | unique:nurses',  
            'password' => 'required|string|min:6|confirmed',
        'password_confirmation' => 'required|string|min:6',       
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
            'phone' => 'required|string',
            'address' => 'required|string',
            'statut' => 'required|string',

        ]);
        $hashedPassword = Hash::make($validatedData['password']);


        try {
            $nurse = Nurse::create($validatedData);
            $nurse->password = $hashedPassword;
            $nurse->save();
            return response()->json(['success' => true, 'message' => 'nurse created successfully', 'data' => $nurse], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function login(Request $request)
{
    $email = $request->email;
    $password = $request->password;

    $nurse = Nurse::where('email', $email)->first();

    if (!$nurse) {
        return response()->json(['error' => 'Invalid email'], 401);
    }

    if (!Hash::check($password, $nurse->password)) {
        return response()->json(['error' => 'Invalid password'], 401);
    }

    // At this point, the user has been authenticated
    // You can generate a token or perform other actions here

    return response()->json(['nurse' => $nurse]);
}




public function getNurse(){

    $data = json_decode(request()->getContent());
    
    if ($data !== null && property_exists($data, "email")) {
        // $patient = $this->patientModel->getPatientByEmail($data->email);
        $nurse = Nurse::getNurseByEmail($data->email);

        if ($nurse !== null) {
            return response()->json([
                "patientId" => $nurse->id,
                "name" => $nurse->name,
            ]);
        }
    }
    
    return response()->json([
        "nurse" => false,
    ]);
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function show(Nurse $nurse)
    {
        return view('nurses.show', compact('nurse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function edit(Nurse $nurse)
    {
        return view('nurses.edit', compact('nurse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nurse $nurse)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'gender' => 'required|in:male,female',
            'phone_number' => 'required|string',
            'role' => 'required|string',
        ]);

        $nurse->update($validatedData);

        return redirect()->route('nurses.index')
            ->with('success', 'Nurse updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nurse $nurse)
    {
        $nurse->delete();

        return redirect()->route('nurses.index')
            ->with('success', 'Nurse deleted successfully.');
    }
}
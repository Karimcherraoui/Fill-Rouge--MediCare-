<?php

namespace App\Http\Controllers;

use App\Models\Appointement;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class AppointementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Appointements = Appointement::all();

        return view('Appointements.index', compact('Appointements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Appointements.create');
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
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'date' => 'required|date',
            'heure' => 'required' ,
            'jour'=> 'required' ,
            'mois'=> 'required' ,
            'statut'=> '',
            'reason' => 'required|string',
            
        ]);

            try {
                $Appointement = Appointement::create($validatedData);
           
                return response()->json(['success' => true, 'message' => 'Appointement created successfully', 'data' => $Appointement], 200);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
            }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointement  $Appointement
     * @return \Illuminate\Http\Response
     */
    public function show(Appointement $Appointement)
    {
        return view('Appointements.show', compact('Appointement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointement  $Appointement
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointement $Appointement)
    {
        return view('Appointements.edit', compact('Appointement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointement  $Appointement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointement $Appointement)
    {
        $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'date' => 'required|date',
            'reason' => 'required|string',
        ]);

        $Appointement->update($validatedData);

        return redirect()->route('Appointements.index')
            ->with('success', 'Appointement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointement  $Appointement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointement $Appointement)
    {
        $Appointement->delete();

        return redirect()->route('Appointements.index')
            ->with('success', 'Appointement deleted successfully.');
    }

    public function allRdv(Request $req){
        return Response()->json([
            "appointments" => Appointement::WhereDate('date',$req->date)
            ->where("doctor_id", $req->doc_id)
            ->get()
    ], 200);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\MedicalHistorie;
use Illuminate\Http\Request;


class MedicalHistorieController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicalHistorie  $medicalHistorie
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalHistorie $medicalHistorie)
    {
        return view('medical-histories.show', compact('medicalHistorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicalHistorie  $medicalHistorie
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalHistorie $medicalHistorie)
    {
        return view('medical-histories.edit', compact('medicalHistorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedicalHistorie  $medicalHistorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalHistorie $medicalHistorie)
    {
        $validatedData = $request->validate([
            'disease' => ['required', 'string'],
            'treatment' => ['required', 'string'],
            'appointment_date' => ['required', 'date'],
        ]);

        $medicalHistorie->update($validatedData);

        return redirect()->route('medical-histories.show', $medicalHistorie)
                         ->with('success', 'Medical history updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicalHistorie  $medicalHistorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalHistorie $medicalHistorie)
    {
        $medicalHistorie->delete();

        return redirect()->route('patients.show', $medicalHistorie->patient)
                         ->with('success', 'Medical history deleted successfully');
    }
}
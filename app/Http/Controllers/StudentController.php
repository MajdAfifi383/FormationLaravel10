<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
             'age'=>'required',
              'email'=>'required',
               'adresse'=>'required',
                'sexe'=>'required'
            
        ]);
        Student::create($request->all());
        return redirect()->route('students.index')->with('success','studiant ajoutée avec success');
    }

    /**
     * Display the specified resource.

     

     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'email' => 'required',
            'adresse' => 'required',
            'sexe' => 'required|in:woman,man'
        ]);
    
        // Utilisation correcte de la méthode update()
        $student->update($request->all());
    
        return redirect()->route('students.index')->with('success', 'Étudiant modifié avec succès');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success','etudiant deleted successfully');
    }
}

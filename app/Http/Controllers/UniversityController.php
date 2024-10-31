<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index()
    {
        $models = University::orderBy('id', 'asc')->get();
        return view('main.university', ['models' => $models]);
    }
    public function delete(University $university)
    {
        $university->delete();
        return redirect()->route('universities.index')->with('success', 'Universitet muvaffaqiyatli o\'chirildi!');
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        University::create($data);
        return redirect()->route('universities.index')->with('success', 'Universitet muvaffaqiyatli qo\'shildi!');
    }
    
}

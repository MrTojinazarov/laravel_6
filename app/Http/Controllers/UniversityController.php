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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class AdminFacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::paginate(15);
        return view('backend.faculty.index', compact('faculties'));
    }

    public function add()
    {
        $faculties = Faculty::paginate(15);
        return view('backend.faculty.index', compact('faculties'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:faculties'
        ]);
        Faculty::create($data);
        return back();
    }

}

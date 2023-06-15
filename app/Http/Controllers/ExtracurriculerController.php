<?php

namespace App\Http\Controllers;

use App\Models\Extracurriculer;
use Illuminate\Http\Request;

class ExtracurriculerController extends Controller
{
    public function index()
    {
        $ekskul = Extracurriculer::with('student')->get();
        return view('extracurriculer', compact('ekskul'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

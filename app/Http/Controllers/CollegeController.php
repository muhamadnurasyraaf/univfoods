<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        College::create([
            'college_name' => 'Taming Sari (TS)',
            'category' => 'KKA'
        ]);
        College::create([
            'college_name' => 'Sulok Belingkong (SB)',
            'category' => 'KKA'
        ]);
        College::create([
            'college_name' => 'Sri Rempai (SR)',
            'category' => 'KKA'
        ]);
        College::create([
            'college_name' => 'Sri Manja Kini',
            'category' => 'KKC',
        ]);
        College::create([
            'college_name' => 'Nilam',
            'category' => 'KKB',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Relative;
use App\Http\Requests\StoreRelativeRequest;
use App\Http\Requests\UpdateRelativeRequest;

class RelativeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $relatives = Relative::all();
            return view('students/relatives.index_relatives', compact('relatives'));
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('students_affairs/relatives.create_relative');
        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRelativeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Relative $relative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Relative $relative)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRelativeRequest $request, Relative $relative)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Relative $relative)
    {
        //
    }
}

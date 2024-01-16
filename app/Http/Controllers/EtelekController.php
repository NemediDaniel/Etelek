<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kati;
use Resources\views\Katik\index;

class EtelekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $adatok=Kati::all();
        //dd($adatok);

        return view('Katik.index')->with('adatok', $adatok);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Katik.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $adatok=new Kati();
        $adatok->name=$request ->name;
        $adatok->save();
        return redirect()->route('adatok.index')->with('success', 'gyász lavarel');
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

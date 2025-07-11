<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{


    public function index()
    {
        return view('warehouses.index');
        // $warehouses = Warehouse::all();
        // return view('warehouses.index', compact('warehouses'));
    }


    public function create()
    {
        return view('warehouses.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        Warehouse::create($request->all());

        return redirect()->route('warehouses.index')->with('success', 'Warehouse created successfully.');
    }



    public function show(string $id)
    {
        //
    }



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

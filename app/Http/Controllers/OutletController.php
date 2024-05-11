<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outlets = Outlet::latest()->paginate(10);
        return view('outlets.index', compact('outlets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('outlets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|max:5',
            'name' => 'required',
            'status' => 'required|in:sedang berlangsung, sudah selesai',
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        Outlet::create([
            'code' => $request->code,
            'name'     => $request->name,
            'status'   => $request->status,
            'addres'   => $request->addres,
            'phone_number'   => $request->phone_number
        ]);

        return redirect()->route('outlets.index')->with('success', 'Data berhasil ditambahkan.');
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
    public function edit(Outlet $outlets)
    {
        return view ('outlets.edit', compact('outlets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'code' => 'required|max:5',
            'name' => 'required',
            'status' => 'required|in:sedang berlangsung, sudah selesai',
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        $outlets = Outlet::find($id);
        $outlets->update($request->all());
        return redirect()->route('outletss.index')->with('success', 'Data berhasil di update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $outlets = Outlet::find($id);
        $outlets->delete();
        return redirect()->route('outlets.index')

            ->with('success', 'Outlet berhasil dihapus');
    }
}

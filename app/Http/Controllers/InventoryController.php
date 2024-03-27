<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = barang::orderBy('id', 'desc')->paginate(2);
        return view('inventory.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaBarang' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:0',
        ], [
            'namaBarang.required'=> 'Nama barang wajib diisi',
            'brand.required'=> 'Brand wajib diisi',
            'jumlah.required'=> 'Jumlah wajib diisi',
            'jumlah.required'=> 'Jumlah berupa angka',
        ]);

        $barang = new Barang([
            'name' => $validatedData['namaBarang'],
            'brand' => $validatedData['brand'],
            'jumlah' => $validatedData['jumlah'],
        ]);

        $barang->save();
        return redirect()->route('data')->with('success', 'Barang berhasil disimpan.');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('inventory.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->update([
        'name' => $request->input('namaBarang'),
        'brand' => $request->input('brand'),
        'jumlah' => $request->input('jumlah'),
        ]);

        return redirect()->route('data')->with('success', 'Barang berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id)->delete();
        return redirect()->route('data')->with('success', 'Barang berhasil dihapus');
    }
}

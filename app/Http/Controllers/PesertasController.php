<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertasController extends Controller
{
    public function index()
    {
        $peserta =  Peserta::all();
        return response()->json($peserta);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $peserta = new Peserta();
        $peserta->name=$request->name;
        $peserta->email=$request->email;
        $peserta->password=Hash::make($request->password);
        $peserta->save();
        return response()->json('Data '.$peserta->name.'  Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pesertas = Peserta::find($id);
        return response()->json($peserta);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $peserta = Peserta::find($id);
        $peserta->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        $peserta->save();
        return response()->json($peserta->name . ' Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $peserta = Peserta::findOrFail($id);
        $peserta->delete();
        return response()->json('Data '.$peserta->name.' Berhasil DiHapus');
    }
}

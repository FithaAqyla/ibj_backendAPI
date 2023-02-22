<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    public function indexcatgor()
    {
        $cc =  Category::all();
        return response()->json($cc);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function createdata(Request $request)
    {
        $cc = new Category();
        $cc->name = $request->name;
        $cc->save();
        return response()->json('Data '.$cc->name.' Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cc = Category::find($id);
        return response()->json($cc);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cc = Category::find($id);
        $cc->update([
            'name' => $request->name,
        ]);
        $post->save();
        return response()->json('Data '.$cc->name.' Berhasil DiUpdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cc = Category::findOrFail($id);
        $cc->delete();
        return response()->json('Data '.$cc->name.' Berhasil DiDelete');

    }
}

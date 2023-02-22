<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course =  Courses::all();
        return response()->json($course);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $post = new Courses();
        $post->title = $request->title;
        $post->course_category_id = $request -> course_category_id;
        $post->save();
        return response()->json('Data '.$post->title.' Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Courses::find($id);
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Courses::find($id);
        $post->title = $request->title;
        $post->course_category_id = $request -> course_category_id;
        $post->save();
        return response()->json('Data '.$post->title.' Berhasil DiUpdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Courses::find($id);
        $post->delete();
        return response()->json('Data '.$post->title.' Berhasil DiUpdate');

    }
    public function getCoursesCategory($course_category_id){
        $post = courses::where('$course_category_id', $course_category_id)->get();
        $Category=[];
        foreach ($post as $key => $value){
            $ulang = [
                'name' => $value->category->name,
                'id_courses'=> $value->id_courses,
                'title'=>$value->title
            ];
            array_push($Category, $ulang);
        }
        return response()->json($Category);
    }
}

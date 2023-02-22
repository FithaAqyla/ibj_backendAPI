<?php

namespace App\Http\Controllers;

use App\Models\Usercourses;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsercoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $uc =  Usercourses::all();
        return response()->json($uc);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $uc = new Usercourses();
        $uc->id_user = $request->id_user;
        $uc->id_courses = $request->id_courses;
        $uc->save();
        return response()->json('Data '.$uc.' Berhasil DiTambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usercourses $id)
    {
        $uc = Usercourses::find($id);
        return response()->json($uc);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $uc = Usercourses::find($id);
        $uc->update([
            'id_user'=>$request->id_user,
            'id_courses'=>$request->id_courses,
        ]);
        $uc->save();
        return response()->json($uc->name . 'Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $uc = Usercourses::find($id);
        $uc->delete();
        return response()->json('Data '.$uc.' Berhasil DiHapus');
    }
    public function getCourseByUser($id_user){
        $uc = Usercourses::where('id_user', $id_user)->get(     
        );
        $course = [];
        foreach ($uc as $key => $value) {
            $ulang = [
                'id_user' => $value->id_user,
                
                'title' => $value->course->title,
                'course_category_id' => $value->course->course_category_id,
                
                
            ];
            array_push($course, $ulang);
        }
        return response()->json($course);
    }
    public function getUserByCourse($id_courses)
    {
        $uc = users_barang::where('id_courses', $id_courses)->get();
        $user = [];
        foreach ($uc as $key => $value) {
            $user[] = $value->user;
        }
        return response()->json($user);
    }

}

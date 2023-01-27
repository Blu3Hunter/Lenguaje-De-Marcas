<?php

namespace App\Http\Controllers;

use App\Models\Courses as ModelsCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Courses extends Controller
{
    public function insertCourse(Request $request)
    {

        try {
            DB::beginTransaction();
            $courses = new ModelsCourses();
            $courses->course_name = $request->course_name;
            $courses->teacher_course = $request->teacher_course;
            $courses->save();
            DB::commit();
        } catch (\PDOException $e) {
            DB::rollBack();
            return $e;
        }
        return response()->json([
            "status" => 1,
            "msg" => "¡El curso $courses->course_name ha sido registrado correctamente!",
        ]);
    }

    public function readCourse()

    {
        return ModelsCourses::all();
    }

    public function updateCourse(Request $request)
    {

        try {
            DB::beginTransaction();

            $courses = new ModelsCourses();
            $courses->id = $request->id;
            $courses->teacher_course = $request->teacher_course;
            $courses->course_name = $request->course_name;
            $courses = ModelsCourses::find($courses->id);
            $courses->update([
                'course_name' => $request->course_name,
                'teacher_course' => $request->teacher_course,
            ]);
            DB::commit();
        } catch (\PDOException $e) {
            DB::rollBack();
            return $e;
        }

        return response()->json([
            "status" => 1,
            "msg" => "¡El curso $courses->course_name ha sido modificado correctamente!",
        ]);
    }

    public function deleteCourse(Request $request)
    {

        try {
            DB::beginTransaction();

            $courses = new ModelsCourses();;
            $courses->id = $request->id;
            if ($courses = ModelsCourses::find($courses)) return ModelsCourses::destroy($courses);


            DB::commit();
        } catch (\PDOException $e) {
            DB::rollBack();
            return $e;
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Students as ModelsStudents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Students extends Controller
{
    public function insertStudent(Request $request)
    {
        try {
            DB::beginTransaction();
            $students = new ModelsStudents();
            $students->name = $request->name;
            $students->surnames = $request->surnames;
            $students->dni = $request->dni;
            $students->student_course = $request->student_course;
            $students->save();
            DB::commit();
        } catch (\PDOException $e) {
            // Woopsy
            DB::rollBack();
            return $e;
        }
        return response()->json([
            "status" => 1,
            "msg" => "¡El estudiante $students->name ha sido registrado correctamente!",
        ]);
    }


    public function readStudent()

    {
        return ModelsStudents::all();
    }


    public function updateSudent(Request $request)
    {

        try {
            DB::beginTransaction();
            $students = new ModelsStudents();
            $students->id = $request->id;
            $students->name = $request->name;
            $students->surnames = $request->surnames;
            $students->dni = $request->dni;
            $students->course = $request->course;
            $students = ModelsStudents::find($students->id);
            $students->update([
                'name' => $request->name,
                'surnames' => $request->surnames,
                'dni' => $request->dni,
                'course' => $request->course,
            ]);
            DB::commit();
        } catch (\PDOException $e) {
            // Woopsy
            DB::rollBack();
            return $e;
        }

        return response()->json([
            "status" => 1,
            "msg" => "¡El estudiante $students->name ha sido modificado correctamente!",
        ]);
    }

    public function deleteStudent(Request $request)
    {

        try {
            DB::beginTransaction();
            $students = new ModelsStudents();;
            $students->id = $request->id;
            if ($students = ModelsStudents::find($students)) return ModelsStudents::destroy($students);
            DB::commit();
        } catch (\PDOException $e) {
            DB::rollBack();
            return $e;
        }
    }
}

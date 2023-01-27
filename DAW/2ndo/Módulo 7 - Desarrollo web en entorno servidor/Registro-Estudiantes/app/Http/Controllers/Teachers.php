<?php

namespace App\Http\Controllers;

use App\Models\Teachers as ModelsTeachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class Teachers extends Controller
{
    public function insertTeacher(Request $request)
    {

        try {
            DB::beginTransaction();
            $teachers = new ModelsTeachers();
            $teachers->name = $request->name;
            $teachers->surnames = $request->surnames;
            $teachers->dni = $request->dni;
            $teachers->save();
            DB::commit();
        } catch (\PDOException $e) {
            // Woopsy
            DB::rollBack();
            return $e;
        }

        return response()->json([
            "status" => 1,
            "msg" => "¡El profesor $teachers->name ha sido registrado correctamente!",
        ]);
    }

    public function readTeacher()

    {
        return ModelsTeachers::all();
    }

    public function updateTeacher(Request $request)
    {

        try {
            DB::beginTransaction();
            $teachers = new ModelsTeachers();
            $teachers->id_teacher = $request->id_teacher;
            $teachers->name = $request->name;
            $teachers->surnames = $request->surnames;
            $teachers->dni = $request->dni;
            $teachers = ModelsTeachers::find($teachers->id);
            $teachers->update([
                'name' => $request->name,
                'surnames' => $request->surnames,
                'dni' => $request->dni,
            ]);
            DB::commit();
        } catch (\PDOException $e) {
            // Woopsy
            DB::rollBack();
            return $e;
        }

        return response()->json([
            "status" => 1,
            "msg" => "¡El profesor $teachers->name ha sido modificado correctamente!",
        ]);
    }

    public function deleteTeacher(Request $request)
    {
        try {
            DB::beginTransaction();
            $teachers = new ModelsTeachers();;
            $teachers->id_teacher = $request->id_teacher;
            if ($teachers = ModelsTeachers::find($teachers)) return ModelsTeachers::destroy($teachers);
            DB::commit();
        } catch (\PDOException $e) {
            // Woopsy
            DB::rollBack();
            return $e;
        }
    }
}

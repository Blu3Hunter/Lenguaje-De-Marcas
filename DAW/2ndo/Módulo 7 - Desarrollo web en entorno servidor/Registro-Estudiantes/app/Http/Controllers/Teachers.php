<?php

namespace App\Http\Controllers;

use App\Models\Teachers as ModelsTeachers;
use Illuminate\Http\Request;

class Teachers extends Controller
{
    public function insertTeacher(Request $request)
    {
        $teachers = new ModelsTeachers();
        $teachers->name = $request->name;
        $teachers->surnames = $request->surnames;
        $teachers->dni = $request->dni;
        $teachers->save();

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
        return response()->json([
            "status" => 1,
            "msg" => "¡El profesor $teachers->name ha sido modificado correctamente!",
        ]);
    }

    public function deleteTeacher(Request $request)
    {
        $teachers = new ModelsTeachers();;
        $teachers->id_teacher = $request->id_teacher;
        if ($teachers = ModelsTeachers::find($teachers)) return ModelsTeachers::destroy($teachers);
    }
}

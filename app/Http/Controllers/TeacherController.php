<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Unit;
use App\Http\Requests\UnitRequest;
use App\Helpers\Uploader;

class TeacherController extends Controller
{
	public function courses () {
		$courses = Course::forTeacher();
		return view('teacher.courses.index', compact('courses'));
	}

	public function createCourse () {

	}

	public function units() {
        $units = Unit::forTeacher();
        return view('teacher.units.index', compact('units'));
	}
	
	public function createUnit() {
        $title = __("Nueva Unidad");
        $textButton = __("Crear unidad");
        $courses = Course::forTeacher();
        $unit = new Unit;
        $options = ['route' => ['teacher.units.store'], 'files' => true];
        return view('teacher.units.create', compact('title', 'courses', 'unit', 'options', 'textButton'));
	}
	
	public function storeUnit(UnitRequest $request) {
        $file = null;
        if ($request->hasFile("file")) {
            $file = Uploader::uploadFile("file", "units");
        }

        $unit = Unit::create($this->unitInput($file));

        return redirect(route('teacher.units'));
    }

    public function editUnit(Unit $unit) {
        $title = __("Editar unidad :unit", ["unit" => $unit->title]);
        $textButton = __("Actualizar unidad");
        $courses = Course::forTeacher();
        $options = ['route' => [
            'teacher.units.update', ['unit' => $unit]], 'files' => true
        ];
        $update = true;
        return view(
            'teacher.units.edit',
            compact('title', 'courses', 'unit', 'options', 'textButton', 'update')
        );
    }

    public function updateUnit(UnitRequest $request, Unit $unit) {
        $file = $unit->file;
        if ($request->hasFile('file')) {
            if ($unit->file) {
                Uploader::removeFile("units", $unit->file);
            }
            $file = Uploader::uploadFile('file', 'units');
        }

        $unit->fill($this->unitInput($file))->save();

        return redirect(route('teacher.units'));
    }

    protected function unitInput(string $file = null): array {
        return [
            "course_id" => request("course_id"),
            "title" => request("title"),
            "content" => request("content"),
            "file" => $file,
            "unit_type" => request("unit_type"),
            "unit_time" => request("unit_time"),
            "free" => request("free")
        ];
    }

}

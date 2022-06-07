<?php

namespace App\Http\Controllers;

use App\Imports\StudentsImport;
use App\Models\Item;
use App\Models\Settings;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Excel;

class AdminssionController extends Controller
{
    public function index()
    {

        return view("start");

    }


    public function start(Request $request)
    {
        $request->validate([
            "index_number" => "required|exists:students,index_number"
        ]);

        $student = Student::where("index_number", $request->index_number)->first();

        if ($student && $student->father_name) {

            return redirect(route("print", $student->uuid));
        }

        if ($student && !$student->father_name) {

            return redirect(route("requestUpdate", $student->uuid));
        }


    }

    public function showUpdate($uuid)
    {

        $student = Student::where("uuid", $uuid)->first();

        if ($student) {
            return view("update", ["student" => $student]);
        }


    }


    public function update($uuid, Request $request)
    {
        $request->validate([
            "father_name" => "required",
            "father_phone_number" => "required",
            "mother_name" => "required",
            "mother_phone_number" => "required",
            "photo" => "required"
        ]);

        $student = Student::where("uuid", $uuid)->first();

        $student->father_name = $request->father_name;
        $student->father_phone_number = $request->father_phone_number;
        $student->mother_name = $request->mother_name;
        $student->mother_phone_number = $request->mother_phone_number;
        $student->photo_url = Storage::url($request->file("photo")->store("public/photos"));
        $student->update();

        return redirect(route("print", $uuid));

    }


    public function print($uuid)
    {


        $student = Student::where("uuid", $uuid)->first();

        $items = Item::where("academic_year", $student->academic_year)->get();
        $settings = Settings::where("academic_year", $student->academic_year)->first();
        return view("print", [
            "items" => $items,
            "student" => $student,
            "settings" => $settings
        ]);


    }


    public function dashboard()
    {

        $data = [
            "all_students" => Student::count(),
            "admitted_students" => Student::whereNotNull("father_name")->count(),
            "recent_admissions" => Student::whereNotNull("father_name")->orderBy("updated_at", "desc")->limit(10)->get(),
            "outstanding_students" => Student::whereNull("father_name")->count(),
            "settings" => Settings::latest()->get()->last()

        ];

        return view("admin.dashboard", $data);

    }


    public function items()
    {


        $data = [
            "items" => Item::orderBy("item")->get()
        ];
        return view("admin.items", $data);


    }


    public function saveitem(Request $request)
    {
        $request->validate([
            "item" => "required",
            "academic_year" => "required",
            "boys_quantity" => "required",
            "girls_quantity" => "required",
        ]);


        if (!Item::where("item", $request->item)->where("academic_year",$request->academic_year)->exists()) {

            $data = $request->all();
            $item = new Item($data);
            $item->save();
            return redirect()->back();

        }

        return redirect()->back()->withErrors(["exists" => "This item already exists in this academic year"]);


    }


    public function deleteitem($id)
    {

        $item = Item::find($id);
        if ($item) {
            $item->delete();
        }

        return redirect()->back();


    }


    public function students()
    {

        $query = Student::query();
        if (isset($_GET['name']) && $_GET['name']) {

            $query->where("name", 'LIKE', "%{$_GET['name']}%");

        }


        $data = [
            "students" => $query->orderBy("academic_year")->orderBy("name")->paginate(100)
        ];

        return view("admin.students", $data);


    }


    public function importStudents(Request $request)
    {
        $request->validate([
            "students" => "required",
            "academic_year" => "required",
        ]);

        \Maatwebsite\Excel\Facades\Excel::import(new StudentsImport($request->academic_year), $request->file("students"));

        return redirect()->back();

    }


    public function settings()
    {
        $data=[
            "settings"=>Settings::orderBy("academic_year")->get()
        ];

        return view("admin.settings",$data);

    }



    public function deleteSettings($id){

        $item = Settings::find($id);
        if ($item){

            $item->delete();
        }

        return redirect()->back();

    }


    public function saveSettings(Request $request){
        $request->validate([
            "academic_year"=>"required",
            "reporting_date"=>"required",
            "headteacher_name"=>"required"
        ]);

        if (!Settings::where("academic_year",$request->academic_year)->exists()){


            $data = $request->all();
            $item = new Settings($data);
            $item->save();


        }

        return redirect()->back();


    }

}

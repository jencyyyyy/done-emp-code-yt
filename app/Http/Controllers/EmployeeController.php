<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
 
class EmployeeController extends Controller
{
    //
    public function index(){
        $employees = Employee::paginate(10);
        // dd($employees);
        return view("employees.index")->with("es", $employees);
    }



    public function details($emp_id){
        //echo 'employee id: ', $emp_id;
         $employee = Employee::find($emp_id);
         return view("employees.details")->with("e", $employee);
    }






    public function create(){
        return view("employees.create");
    
    }
    public function store(Request $request){
        // dd($request->all());

        $validate_rules= [
            "name"=> "required|max:255|string",
            "job_title"=>"required|max:100|string",
            "joining_date" => "required|date",
            "salary" => "required|numeric|min:0", 
            "email" => "nullable|email|max:255", 
            "mobile_no" => "required|string|max:15", 
            "address" => "string"
        ];
        $request->validate($validate_rules);

        $e = Employee::create($request->all());
        return redirect()->route("employees.details",$e->id);
    }



    public function edit($emp_id){
        $e = Employee::find($emp_id);
        return view('employees.update')->with('employee', $e);

    }

    public function update(Request $request, $emp_id ){

       $validate_rules= [
            "name"=> "required|max:255|string",
            "job_title"=>"required|max:100|string",
            "joining_date" => "required|date",
            "salary" => "required|numeric|min:0", 
            "email" => "nullable|email|max:255", 
            "mobile_no" => "required|string|max:15", 
            "address" => "string"
        ];
        $request->validate($validate_rules);

        $employee = Employee::find($emp_id);

        $employee->update($request->all());

        return redirect()->route("employees.details", $employee->id);


    }

    public function destroy($emp_id){
        $e = Employee::find($emp_id);

        $e->delete();
        
        return redirect()->route("home");
    }

    public function search(Request $request)
{
    $text = '%' . $request->search . '%';
    $employees = Employee::where('name', 'LIKE', $text)
                    ->orWhere('job_title', 'LIKE', $text)
                    ->paginate(10);
    return view('employees.index')->with('es', $employees);
}

    
}
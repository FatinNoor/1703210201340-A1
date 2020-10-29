<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    
    public function add(){
        return view('employee');
    }

    public function store(Request $req){
       
        $name=$req->name;
        $email=$req->email;
        $date_of_birth=$req->date_of_birth;
        $salary=$req->salary;
        $gender=$req->gender;
        $status=$req->status;

        $obj=new Employee();
        $obj->name= $name;
        $obj->email= $email;
        $obj->date_of_birth= $date_of_birth;
        $obj->salary= $salary;
        $obj->gender= $gender;
        $obj->status= $status;

        if($obj->save() ){
            return redirect()->back()->with('success','inseret successfully');
        }
    } 
    public function list(){
        $emp=Employee::all();
        return view('show', ['employee'=>$emp]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Models\students;
use Illuminate\Http\Request;
use PDO;

class customer extends Controller
{
    //
    public function index(){
        // Template  read data
        $customers = customers::all();
        $students = students::all();
        return view('welcome',['data'=>$customers,'student'=>$students]);
    }

    public function createPage(){

        return view('create');
    }
    public function student(){

        return view('createStudent');
    }
    public function inputDb(Request $request){
        $new = customers::create([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'description' => $request->input('description'),
            'student_id' => $request->input('student_id')
        ]);
        return redirect()->route('home')->with('success', 'Customer created successfully!');

    }

    public function addStudent(Request $request){
        $student = students::create([
            'type' =>$request->input('type')
        ]);
        return redirect()->route('home')->with('success', 'Customer created successfully!');
    }
    public function deleteCustomer(customers $customer){
        $customer->delete();
        return redirect('home');
    }
}

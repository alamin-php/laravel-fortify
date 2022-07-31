<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=DB::table('students')->orderby('roll', 'ASC')->get();
        return view('admin.students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class=DB::table('classess')->get();
        return view('admin.students.create',compact('class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'class_id'=>'required',
            'name'=>'required',
            'roll'=>'required|unique:students',
            'email'=>'required|unique:students',
            'phone'=>'required',
            'address'=>'required',
        ]);

        $data=array();
        $data['class_id']=$request->class_id;
        $data['name']=$request->name;
        $data['roll']=$request->roll;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;

        DB::table('students')->insert($data);
        return redirect()->back()->with('success', 'Thank You, Data submit successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=DB::table('students')->where('id', $id)->first();
        return view('admin.students.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class=DB::table('classess')->get();
        $data=DB::table('students')->where('id', $id)->first();
        return view('admin.students.edit', compact('data', 'class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            'name'=>'required',
            'roll'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
        ]);
        $data=array();
        $data['class_id']=$request->class_id;
        $data['name']=$request->name;
        $data['roll']=$request->roll;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        DB::table('students')->where('id', $id)->update($data);
        return redirect()->route('students.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect()->route('students.index')->with('deleted', 'Data deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ClassController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Class table view
     */

     public function index(){
        $class=DB::table('classess')->get();
        return view('admin.class.index', compact('class'));
     }

    /**
     * Class create class view
     */

     public function create(){
        return view('admin.class.create');
     }

    /**
     * Class data store in database
     */

     public function store(Request $request){
        $validated = $request->validate([
            'class_name' => 'required|unique:classess'
        ]);

        $data = array();
        $data['class_name'] = $request->class_name;
        DB::table('classess')->insert($data);
        return redirect()->back()->with('success', 'Inserted Successfully');
     }
    /**
     * Class data delete from database
     */

     public function delete($id){
       DB::table('classess')->where('id', $id)->delete();
       return redirect()->back()->with('deleted', 'Deleted Successfully');
     }
    /**
     * Class data update view
     */

     public function edit($id){
       $data=DB::table('classess')->where('id', $id)->first();
       return view('admin.class.edit', compact('data'));
     }
    /**
     * Class data update from database
     */

     public function update(Request $request, $id){
        $validated = $request->validate([
            'class_name' => 'required'
        ]);

        $data = array();
        $data['class_name'] = $request->class_name;
        DB::table('classess')->where('id', $id)->update($data);
       return redirect()->back()->with('success', 'Updated Successfully');
     }
}

<?php

namespace App\Http\Controllers;

use App\cr;
use App\StudentTables;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class Students extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$table->bigIncrements('id');
        //            $table->string('name');
        //            $table->string('last name');
        //            $table->boolean('graduated');
        //            $table->string('major');
        //            $table->year('realboys'); realboys means year graduated.
        //            $table->timestamps();
        $data = \DB::select("select id, name, last_name, graduated, major, realboys from students");
        return \View::make('homeTable')->with('students',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('createTable');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new \App\Students();

        request()->validate([
        'name'=>['required'],
            'last_name'=>['required'],
            'Major'=>['required', 'min:3', 'max:3'],
            'realboys'=>['required', 'integer', 'min:1920','max:2050']
        ]);
        $student->name = request('name');
        $student->last_name = request('last_name');
        $student->graduated = request('graduated');
        $student->Major = request('Major');
        $student->realboys = request('realboys');
        $student->save();
        return redirect("/home");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $student = \App\Students::find($id);
       return \View::make('showTable')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = \App\Students::find($id);
        return \View::make('editTable')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $major = request('major');
        //print("pages=$pages and title=$title");
        //exit(1);

        $student = \App\Students::find($id);
        $student->major = $major;
        $student->save();
        return redirect("/home/{$id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = \App\Students::find($id);
        $student->delete();
        return redirect("/home");
    }

    public function searchStudent(Request $request){
        request()->validate([
            'q'=>['required']
        ]);
        $keyword = \Request::get('q');
        $students = \App\Students::where('name','LIKE','%'.$keyword.'%')
            ->get();
        return view('searchResults')->with('students', $students);
    }
}

<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;

class something extends Controller
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
        return \View::make('funniTable')->with('students', $data);
    }

}

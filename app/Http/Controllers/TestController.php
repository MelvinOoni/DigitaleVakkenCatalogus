<?php

namespace App\Http\Controllers;

use App\Course;
use App\TestType;
use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $tests = Test::all();
        return view('tests/index', compact('courses', 'tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $tests = Test::all();
        return view('tests/create', compact('courses', 'tests'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tests = new Test();

        $tests->type = request('type');
        $tests->attempt = request('attempt');
        $tests->week = request('week');
        $tests->course_id = request('course_id');

        $tests->save();

        return redirect('/tests');    }

    /**
     * Display the specified resource.
     *
     * @param $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        return view('/tests/show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        $course = Course::all();
        return view('tests/edit', compact('test', 'course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        $test->type = request('type');
        $test->attempt = request('attempt');
        $test->week = request('week');
        $test->course_id = request('course_id');

        $test->save();

        return redirect('/tests');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @param  \App\Course  $course

     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Test::findOrFail($id)->delete();

        return redirect('/tests');
    }
}

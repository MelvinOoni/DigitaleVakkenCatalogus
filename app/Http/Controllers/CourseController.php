<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;
use App\Term;
use App\Test;
use App\Product;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        // $coursesTerms = $courses->terms;

        // dd($courses);

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $terms = Term::all();
        return view('courses.create', compact('terms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = request()->validate([
            'title' => 'required', 
            'start_week' => 'required',
            'end_week' => 'required',
            'term_id' => 'nullable'
        ]);

        Course::create($course);

        return redirect('/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('/courses/show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $terms = Term::all();

        return view('courses.edit', compact('course', 'terms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'title' => 'required',
            'start_week' => 'required',
            'end_week' => 'required',
            'term_id' => 'nullable'
        ]);
        $course = Course::findOrFail($id);
        $course->update(request()->all());

        return redirect(route('courses.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect('/courses');
    }

    public function downloadPDF(Request $request){
        $courses = Course::all();
        $terms = Term::all();
        $tests = Test::all();
        $products = Product::all();

        $pdf = PDF::loadView('report', compact('courses' ,'tests', 'terms', 'products'));
        return $pdf->stream('rapport.pdf', array("Attachment" => 0));
        // return PDF::loadFile('report')->save('/public/uitdraaisel.pdf')->stream('uitdraaisel.pdf');


        // // dd($pdf);
        // $pdf->stream('Rapport.pdf', array("Attachment" => 0));
        // return $pdf->stream('Rapport.pdf', array("Attachment" => 0));
    }

    // public function testPDF($id){
    //     $student = Student::find($id);
    //     $studentComments = $student->comments;
    //     $studentPlans = $student->plans;

    //   	return view('report', compact('student', 'studentComments', 'studentPlans'));
    // }
}

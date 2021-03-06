<?php

namespace App\Http\Controllers;

use App\Term;
use Illuminate\Http\Request;
use PHPUnit\Util\Test;
use function Sodium\compare;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = Term::all();

        return view('terms.index', compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $term = request()->validate([
            'image' => 'nullable',
            'title' => 'required',
            'number' => 'required',
            'description' => 'required',
            'semester' => 'required'
        ]);

        Term::create($term);

        return redirect('/terms');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Term $term
     * @return \Illuminate\Http\Response
     */
    public function show(Term $term)
    {
        return view('/terms/show', compact('term'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Term $term
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $term = Term::find($id);

        return view('terms.edit', compact('term'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Term $term
     * @return \Illuminate\Http\Response
     */
    public function update(Term $term, Request $request)
    {
        $term->image = request('image');
        $term->title = request('title');
        $term->number = request('number');
        $term->description = request('description');
        $term->semester = request('semester');

        $term->save();

        return redirect('/terms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Term $term
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Term::findOrFail($id)->delete();

        return redirect('/terms');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tests;

class TestsController extends Controller
{
    public function index(){
        $tests = Tests::all();
        return view('tests.index', compact('tests'));
    }

    public function create(){
        $tests = Tests::all();
        return view('tests.create', compact('tests'));
    }

    public function edit($id)
    {
        $tests = Tests::findOrFail($id);
        return view('tests.edit', compact('tests'));
    }

    public function store(Request $request)
    {
        $tests = new tests();

        $tests->attempt = request('attempt');
        $tests->week = request('week');
        $tests->save();

        return redirect('/tests');
    }

    public function update($id, Request $request)
    {
        $tests = Tests::findOrFail($id);

        $tests->attempt = request('attempt');
        $tests->week = request('week');
        $tests->save();

        return redirect('/tests');
    }

    public function destroy($id)
    {
        Tests::findOrFail($id)->delete();
        return redirect('/tests');
    }
}

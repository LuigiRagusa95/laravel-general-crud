<?php

namespace App\Http\Controllers;

use App\Joke;
use Illuminate\Http\Request;

class JokeController extends Controller
{
    public function index()
    {
        $jokes = Joke::simplePaginate(1);
        return view('jokes.index', compact('jokes'));
    }

    public function create()
    {
        return view('jokes.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $jokes = new Joke();

        $jokes->fill($data);
        $jokes->save();

        return redirect()->route('jokes.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

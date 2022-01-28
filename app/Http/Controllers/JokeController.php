<?php

namespace App\Http\Controllers;

use App\Joke;
use Illuminate\Http\Request;

class JokeController extends Controller
{
    public function index()
    {
        $jokes = Joke::orderBy('id', 'DESC')->simplePaginate(1);
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
        $joke = Joke::find($id);
        if ($joke) {
            return view('jokes.edit', compact('joke'));
        }
        abort(404);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $joke = Joke::find($id);
        $joke->update($data);

        return redirect()->route('jokes.index');
    }

    public function destroy($id)
    {
        $joke = Joke::find($id);
        $joke->delete();
        return redirect()->route('jokes.index');
    }
}

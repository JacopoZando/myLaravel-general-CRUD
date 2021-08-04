<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyMatch;

class MainController extends Controller
{
    private function getValidationRules() {

        return [
            
            'team1' => 'required|string|min:3|max:255',
            'team2' => 'required|string|min:3|max:255',
            'point1' => 'required|integer|min:0|max:100',
            'point2' => 'required|integer|min:0|max:100',
            'result' => 'required|boolean',
        ];

    }

    public function home() {

        $matches = MyMatch::all();

        return view('pages.home', compact('matches'));
    }

    public function show($id) {

        $match = MyMatch::findOrFail($id);

        return view('pages.show', compact('match'));
    }

    public function create() {
        return view('pages.create');
    }
    
    public function store(Request $request) {
        
        $validated = $request -> validate($this -> getValidationRules());
        
        $match = MyMatch::create($validated);
        return redirect() -> route('show', $match -> id);
    }
    
    public function edit($id) {
        $match = MyMatch::findOrFail($id);
        return view('pages.edit', compact('match'));
    }

    public function update(Request $request, $id) {

        $match = MyMatch::findOrFail($id);
        $validated = $request -> validate($this -> getValidationRules());
        $match -> update($validated);
        return redirect() -> route('show', $match -> id);
    }

    public function delete($id) {

        $match = MyMatch::findOrFail($id);
        $match -> delete();
        return redirect() -> route('home');
    }
}

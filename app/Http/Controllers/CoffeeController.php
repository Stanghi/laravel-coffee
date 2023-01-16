<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoffeeRequest;
use App\Models\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coffees = Coffee::orderBy('id', 'desc')->paginate(10);
        return view('coffees.index', compact('coffees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coffees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoffeeRequest $request)
    {
        $form_data = $request->all();
        $new_coffee = new Coffee();

        $form_data['slug'] = Coffee::generateSlug($form_data['title']);
        $new_coffee->fill($form_data);

        $new_coffee->save();

        return redirect()->route('coffees.index')->with('success', 'Coffee added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function show(Coffee $coffee)
    {
        return view('Coffees.show', compact('coffee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function edit(Coffee $coffee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coffee $coffee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coffee $coffee)
    {
        $coffee->delete();
        return redirect()->route('coffees.index')->with('success', "La bevanda $coffee->title è stata eliminata");
    }
}

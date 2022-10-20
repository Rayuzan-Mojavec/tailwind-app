<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::filter(request(['search']))->paginate(25)->withQueryString();

        return view('tables.tables', compact('people'), ['title' => "Tables"]);
    }



    public function create()
    {
        $gender = ["Cowok", "Cewek"];
        $religion = ["Islam", "Katolik", "Protestan", "Buddha", "Hindu", "Konghucu"];

        return view('tables.create', [
            'title' => "Create", 
            'gender' => $gender,
            'religion' => $religion
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ([
            'ssn' => 'required|max:18|unique:people,ssn',
            'namae' => 'required|max:100',
            'gender' => 'required|max:100',
            'rerijyon' => 'required|max:100',
            'address' => 'required|max:255',
            'birth_date' => 'required|date',
        ]);

        $newData = $request->validate($rules);

        People::create($newData);

        return redirect('/tables');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $people)
    {
        $gender = ["Cowok", "Cewek"];
        $religion = ["Islam", "Katolik", "Protestan", "Buddha", "Hindu", "Konghucu"];

        return view('tables.edit', [
            'title' => "Edit",
            'gender' => $gender,
            'religion' => $religion,
            'people' => $people
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people)
    {
        $rules = ([
            'ssn' => 'required|max:18|unique:people,ssn',
            'namae' => 'required|max:100',
            'gender' => 'required|max:100',
            'rerijyon' => 'required|max:100',
            'address' => 'required|max:255',
            'birth_date' => 'required|date',
        ]);

        $updateData = $request->validate($rules);

        People::where('ssn', $people->ssn)->update($updateData);

        return redirect('/tables');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        People::destroy($people->ssn);
    }
}

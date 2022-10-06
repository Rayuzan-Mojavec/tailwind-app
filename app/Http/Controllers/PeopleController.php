<?php

namespace App\Http\Controllers;

use App\Models\People;
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
        $people = People::paginate(25);
        return view('tables', compact('people'), ['title' => "Tables"]);
    }


    public function search(Request $request)
    {
        $output = "";
        $people = People::where('namae', 'LIKE', '%' . $request->search . '%')->orwhere('address', 'LIKE', '%' . $request->search . '%')->get();

        foreach ($people as $person) {
            $output .=
                '<tr class="border">
                
                <td class="py-4 px-6 border"> '.$person->ssn.' </td>
                <td class="py-4 px-6 border"> '.$person->namae.' </td>
                <td class="py-4 px-6 border"> '.$person->gender.' </td>
                <td class="py-4 px-6 border"> '.$person->rerijyon.' </td>
                <td class="py-4 px-6 border"> '.$person->address.' </td>
                <td class="py-4 px-6 border"> '.$person->date().' </td>
        </tr>';
        }

        return response($output);
    }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        //
    }
}

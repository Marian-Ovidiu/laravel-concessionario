<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auto = Auto::all();

        return view('auto.index', compact('auto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validateForm($request);

        $data = $request->all();
        $auto = new Auto();
        $auto->fill($data);
        $auto->save();

        $newAuto = Auto::orderBy('id', 'desc')->first();

        return redirect()->route('auto.show', $newAuto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        return view('auto.show', compact('auto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function validateForm(Request $request) {

        $request -> validate([

            'model_name' => 'required|max:255',
            'cubic_capacity' => 'required|numeric|between:1000, 10000',
            'max_speed' => 'required|numeric|between:50, 500'

        ]);

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Genre::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ], [
            'name.required' => 'The genre name is required',
        ]);

        if ($validator->fails()) {
            return response($validator->getMessageBag()->get('name'), 200);
        }
        Genre::create($request->all());
        return response('Successful', 200)->header('Content-Type', 'application/json');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = Genre::find($id);
        if (!is_null($genre)) {
            return response($genre, 200);
        }
        return response('Genre not found', 200)->header('Content-Type', 'application/json');;
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
        $genre = Genre::find($id);
        if (!is_null($genre)) {
            $genre->update($request->all());
            return response('Successful', 200)->header('Content-Type', 'application/json');;
        }
        return response('Genre not found', 200)->header('Content-Type', 'application/json');;
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
}

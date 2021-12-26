<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Movie::all();
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
            'synopsis' => 'required',
            'genre_id' => 'required|exists:App\Models\Genre,id',
        ], [
            'required' => 'The movie :attribute is required',
        ]);

        if ($validator->fails()) {
            return response($validator->getMessageBag(), 200);
        }
        Movie::create($request->all());
        return response()->json(['message:' => "Successful"], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        if (!is_null($movie)) {
            return response($movie, 200);
        }
        return response()->json(['message' => 'Movie not found'], 404);
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
        $movie = Movie::find($id);
        if (!is_null($movie)) {
            $movie->update($request->all());
            return response()->json(['message' => 'Successful'], 200);
        }
        return response()->json(['message' => 'Movie not found'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        if (!is_null($movie)) {
            $movie->delete();
            return response()->json(['message' => 'Successful'], 200);
        }
        return response()->json(['message' => 'Movie not found'], 404);
    }
}

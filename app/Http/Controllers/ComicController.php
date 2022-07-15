<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view ('homepage', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|unique:comics|max:100',
            'description' => 'required',
            'thumb' => 'nullable|URL|max:255',
            'price' => 'required|numeric',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:50',
        ]);

        $data= $request->all();
        $tempComic = new Comic();
        $tempComic->fill($data);
        $tempComic->save();
        return redirect(route('homepage'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $request->validate([
            'title' => 'required|unique:comics|max:100',
            'description' => 'required',
            'thumb' => 'nullable|URL|max:255',
            'price' => 'required|numeric',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:50',
        ]);

        $data = $request->all();

        $comic->update($data);
        return redirect(route('homepage'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect(route('homepage'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comic;
use App\Functions\Helper;

class comicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comics= Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('comics.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data= $request->all();

        $artists_array=explode(',', $form_data['artists']);
        $writers_array=explode(',', $form_data['writers']);


        $new_comic= new comic();

        $new_comic->title = $form_data['title'];
        $new_comic->description = $form_data['description'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];
        $new_comic->artists = json_encode($artists_array);
        $new_comic->writers = json_encode($writers_array);
        $new_comic->slug = Helper::getSlug($new_comic->tile, new Comic());

        // dd($new_comic);

        $new_comic->save();
        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(comic $comic)
    {

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(comic $comic)
    {
        return view('comics.edit', compact('comic'));

    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, comic $comic)
    {

        $form_data = $request->all();
        $artists_array = explode(',', trim($form_data['artists'], '[]'));
        $writers_array = explode(',', trim($form_data['writers'], '[]'));

        if($form_data['title'] === $comic->title){
            $form_data['slug'] = $comic->slug;
        }else{
            $form_data['slug'] = Helper::getSlug($form_data['title'], new comic());
        }


        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->artists = json_encode($artists_array);
        $comic->writers = json_encode($writers_array);
        $comic->slug = $form_data['slug'];

        // dump($comic);
        $comic->save();
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

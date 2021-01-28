<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreContraoller extends Controller
{

    public function index()
    {
//        echo "msai";
        $genres = Genre::all();

        return view('backend.genre.list',compact('genres'));
    }

    public function create()
    {
        return view('backend.genre.new');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
           'name' => ['required','min:3','max:100','unique:genres']
        ]);
        $genre = new Genre();
        $genre->name = $request->name;
        $genre->save();
        return redirect()->route('genre.index')->with('successMsg',"New Genre <strong>($request->name)</strong> is Added in your Data.");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        dd($id);
        $genre = Genre::find($id);

        return view('backend.genre.edit',compact('genre'));
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
//        dd($id);
        $name = $request->name;
        $data = [
            'name'=>$name
        ];
        Genre::where('id',$id)->update($data);

        $oldname=$request->oldname;
        return redirect()->route('genre.index')->with('successMsg',"Existing Genre <strong>($oldname)</strong> is updated as <strong>($request->name)</strong> in your Data.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd($id);
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->route('genre.index')->with('successMsg',"Existing Genre <strong>({$genre->name})</strong> is Deleted as from your Data.");

    }
}

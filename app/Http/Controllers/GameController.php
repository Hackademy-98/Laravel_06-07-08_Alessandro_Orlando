<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use View;

class GameController extends Controller
{

    public function __construct(){
        $this->middleware("auth")->except('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('game.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
        $file = $request->file('img');

        Game::create([
          "title" => $request->title,
          "description" => $request->description,
          "price" => $request->price,
          "category_id" => $request->category,
          "img" => $file ? $file->store('public/images') : "public/images/default.png"
        ]);

return redirect()->route('game.create')->with('success','gioco creato con successo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
      return view('game.show',compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('game.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $file = $request->file('img');

        $game->update([
          "title" => $request->title,
          "description" => $request->description,
          "price" => $request->price,
          "img" => $file ? $file->store("public/images") : $game->img
        ]);

        return redirect()->route("game.edit", compact('game'))->with("success","Il gioco è stato aggiornato correttamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route("")->with("success","Gioco eliminato con successo");
    }

// filtra i giochi in base a una categoria selezionata
public function filterByCategory(Category $category){
    return view('game.filterByCategory',compact("category"));

    }
}

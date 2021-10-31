<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Games;

class GamesController
{

    public function gameList(){
        $games = $this->getGameList();
        return view('game-list')
               ->with('games', $games);
    }

    public function randomGame(){
        $data = $this->getRandomGame();
        return view('random-game')
               ->with('game', $data);
    }

    public function saveGame(Request $request){
        $data = json_decode($request['game'][0]);
        $games = $this->getGameList();
        $this->insertGame($data);
        return redirect('game-list')
               ->with('games', $games);
    }

    public function deleteGame(Request $request){
        $id = json_decode($request['id']);
        $games = $this->getGameList();
        $this->removeGame($id);
        return redirect('game-list')
               ->with('games', $games);
    }

    public function getRandomGame(){
        $response = Http::get('host.docker.internal:9091');
        $data = json_decode( $response->body() );
        return $data;
    }

    public function getGameList(){
        $games = Games::select('*')->get();
        return $games;
    }

    public function insertGame($data){
        Games::insert([
            [
             'id' => $data->id,
             'title' => $data->title,
             'genre' => $data->genre,
             'short_description' => $data->short_description,
             'game_url' => stripslashes($data->game_url),
             'thumbnail' => stripslashes($data->thumbnail),
            ]
        ]);
    }

    
    public function removeGame($id){
        Games::where('id', $id)->delete();
    }

}

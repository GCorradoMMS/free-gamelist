<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/random-game');
Route::get('/game-list', 'App\Http\Controllers\GamesController@gameList')->name('game-list');
Route::get('/random-game', 'App\Http\Controllers\GamesController@randomGame')->name('random-game');

// Endpoints
Route::post('/save-game', 'App\Http\Controllers\GamesController@saveGame')->name('save-game');
Route::post('/delete-game', 'App\Http\Controllers\GamesController@deleteGame')->name('delete-game');

<?php 

    $json = file_get_contents('free-games.json');
    $ar = json_decode($json);
    shuffle($ar);
    $game_json = json_encode($ar[0]);
    echo($game_json);
<?php

/*
    //TO-DO: 
    1. Create a song class
    2. Create songID and songTitle public Properties
    3. Instantiate an "Inauma" song using the new keyword
    4. var_dump to check in browser
*/

class Song{
    public $songID;
    public $songTitle;
}

$inauma = new Song();

$inauma->songID = 1;
$inauma->songTitle = 'inauma';

$malaika = new Song();

$malaika->songID = 2;
$malaika->songTitle = 'malaika';

// var_dump($inauma);

class Playlist{
    public $name;
    public $songs = [];

    //function to add songs in the array
    public function addSong($song){
        $this->songs[] = $song;
    }
}

$playlist = new Playlist();

$playlist->name = 'KenyaFlava';
$playlist->addSong($inauma);
$playlist->addSong($malaika);

var_dump($playlist->songs);
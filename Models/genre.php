<?php

class Genre
{
    public $genre_name;

    function __construct(String $genre_name)
    {
        $this->genre_name = $genre_name;
    }

    public function printGenreInfo()
    {
        return "$this->genre_name, ";
    }
}

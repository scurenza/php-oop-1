<?php
/*require_once __DIR__ . "/genres.php";*/
require_once __DIR__ . "/cast.php";

class Movie
{
    public $name;
    public $cast;
    /* public $genre; */

    private $vote = 0;

    function __construct(string $name, array $cast)
    {
        $this->name = $name;
        $this->cast = $cast;
        /*$this->genre = $genre;*/
    }

    public function getVote()
    {
        return $this->vote;
    }

    public function printMovieInfo()
    {
        return "Nome: $this->name; Cast: $this->cast";
    }
}

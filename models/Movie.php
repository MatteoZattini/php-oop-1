<?php

class Movie
{
    public $nome;
    public $release;
    public $voto;

    public function description()
    {
        return "$this->nome è uscito nel $this->release con un voto di $this->voto";
    }

    public function __construct($nome, $release, $voto)
    {
        $this->nome = $nome;
        $this->release = $release;
        $this->voto = $voto;
    }
}
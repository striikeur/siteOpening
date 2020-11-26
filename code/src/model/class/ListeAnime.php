<?php

class ListeAnime {
    private $lesAnimes;

    /**
     * ListeAnime constructor.
     * @param $anime
     */
    public function __construct(array $lesAnimes)
    {
        $this->lesAnimes = $lesAnimes;
    }

    /**
     * @return array
     */
    public function getLesAnimes(): array
    {
        return $this->lesAnimes;
    }




}
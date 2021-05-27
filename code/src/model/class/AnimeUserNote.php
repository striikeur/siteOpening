<?php


class AnimeUserNote
{
    private $anime;
    private $userNote;

    /**
     * AnimeUserNote constructor.
     * @param Anime $anime
     * @param $userNote
     */
    public function __construct(Anime $anime, $userNote)
    {
        $this->anime = $anime;
        $this->userNote = $userNote;
    }

    /**
     * @return Anime
     */
    public function getAnime(): Anime
    {
        return $this->anime;
    }

    /**
     * @param Anime $anime
     */
    public function setAnime(Anime $anime): void
    {
        $this->anime = $anime;
    }

    /**
     * @return mixed
     */
    public function getUserNote()
    {
        return $this->userNote;
    }

    /**
     * @param mixed $userNote
     */
    public function setUserNote($userNote): void
    {
        $this->userNote = $userNote;
    }




}
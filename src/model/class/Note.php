<?php

class Note
{
    private $id;
    private $animeId;
    private $noteVideo;
    private $noteMusique;
    private $noteTotale;

    /**
     * Note constructor.
     * @param $id
     * @param $animeId
     * @param $noteVideo
     * @param $noteMusique
     */
    public function __construct($id, $animeId, $noteVideo, $noteMusique)
    {
        $this->id = $id;
        $this->animeId = $animeId;
        $this->noteVideo = $noteVideo;
        $this->noteMusique = $noteMusique;
    }

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAnimeId(): int
    {
        return $this->animeId;
    }

    /**
     * @return mixed
     */
    public function getNoteVideo(): float
    {
        return $this->noteVideo;
    }

    /**
     * @return mixed
     */
    public function getNoteMusique(): float
    {
        return $this->noteMusique;
    }

    /**
     * @return mixed
     */
    public function getNoteTotale(): float
    {
        return $this->noteTotale;
    }





}

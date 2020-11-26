<?php

class Note
{
    private $id;
    private $animeId;
    private $userId;
    private $noteVideo;
    private $noteMusique;
    private $noteTotale;

    /**
     * Note constructor.
     * @param $id
     * @param $animeId
     * @param $userId
     * @param $noteVideo
     * @param $noteMusique
     * @param $noteTotale
     */
    public function __construct($id, $animeId, $userId, $noteVideo, $noteMusique, $noteTotale)
    {
        $this->id = $id;
        $this->animeId = $animeId;
        $this->userId = $userId;
        $this->noteVideo = $noteVideo;
        $this->noteMusique = $noteMusique;
        $this->noteTotale = $noteTotale;
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
    public function getUserId(): int
    {
        return $this->userId;
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

<?php


class Ending
{
    private $id;
    private $name;
    private $malLink;
    private $season;
    private $miniature;
    private $video;
    private $moyenne;
    private $spoiler;
    private $nsfw;

    /**
     * Ending constructor.
     * @param $id
     * @param $name
     * @param $malLink
     * @param $season
     * @param $miniature
     * @param $video
     * @param $moyenne
     * @param $spoiler
     * @param $nsfw
     */
    public function __construct($id, $name, $malLink, $season, $miniature, $video, $moyenne, $nsfw, $spoiler)
    {
        $this->id = $id;
        $this->name = $name;
        $this->malLink = $malLink;
        $this->season = $season;
        $this->miniature = $miniature;
        $this->video = $video;
        $this->moyenne = $moyenne;
        $this->spoiler = $spoiler;
        $this->nsfw = $nsfw;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMalLink()
    {
        return $this->malLink;
    }

    /**
     * @param mixed $malLink
     */
    public function setMalLink($malLink): void
    {
        $this->malLink = $malLink;
    }

    /**
     * @return mixed
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param mixed $season
     */
    public function setSeason($season): void
    {
        $this->season = $season;
    }

    /**
     * @return mixed
     */
    public function getMiniature()
    {
        return $this->miniature;
    }

    /**
     * @param mixed $miniature
     */
    public function setMiniature($miniature): void
    {
        $this->miniature = $miniature;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video): void
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * @param mixed $moyenne
     */
    public function setMoyenne($moyenne): void
    {
        $this->moyenne = $moyenne;
    }

    /**
     * @return mixed
     */
    public function getSpoiler()
    {
        return $this->spoiler;
    }

    /**
     * @param mixed $spoiler
     */
    public function setSpoiler($spoiler): void
    {
        $this->spoiler = $spoiler;
    }

    /**
     * @return mixed
     */
    public function getNsfw()
    {
        return $this->nsfw;
    }

    /**
     * @param mixed $nsfw
     */
    public function setNsfw($nsfw): void
    {
        $this->nsfw = $nsfw;
    }



}
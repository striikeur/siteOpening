<?php
class Anime
{
    private $id;
    private $name;
    private $malLink;
    private $season;
    private $miniature;
    private $video;

    /**
     * Anime constructor.
     * @param $id
     * @param $name
     * @param $malLink
     * @param $season
     * @param $miniature
     * @param $video
     */
    public function __construct($id, $name, $malLink, $season, $miniature, $video)
    {
        $this->id = $id;
        $this->name = $name;
        $this->malLink = $malLink;
        $this->season = $season;
        $this->miniature = $miniature;
        $this->video = $video;
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




}

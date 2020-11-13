<?php
class Anime
{
    private $id;
    private $name;
    private $season;
    private $malLink;
    private $video;

    public function __construct( $id, $name, $season, $malLink, $video )
    {
        $this->id = $id;
        $this->name = $name;
        $this->season = $season;
        $this->malLink = $malLink;
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }/**
 * @return mixed
 */
    public function getSeason(): string
    {
        return $this->season;
    }/**
 * @return mixed
 */
    public function getMalLink(): string
    {
        return $this->malLink;
    }/**
 * @return mixed
 */
    public function getVideo(): string
    {
        return $this->video;
    }

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }



}

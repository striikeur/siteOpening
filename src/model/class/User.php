<?php

class User
{
    private $pseudo;
    private $note;
    private $id;

    /**
     * User constructor.
     * @param $pseudo
     * @param $note
     * @param $id
     */
    public function __construct($pseudo, $note, $id)
    {
        $this->pseudo = $pseudo;
        $this->note = $note;
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @return mixed
     */
    public function getNote(): array
    {
        return $this->note;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


}

<?php

class User
{
    private $pseudo;
    private $role;
    private $note;

    /**
     * User constructor.
     * @param $pseudo
     * @param $id
     */
    public function __construct($pseudo, $role)
    {
        $this->pseudo = $pseudo;
        $this->role = $role;
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
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return mixed
     */
    public function getNote(): ListNote
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote(ListNote $note)
    {
        $this->note = $note;
    }



}

<?php


class UserMoyenne
{
    private $user;
    private $moyenne;

    /**
     * UserMoyenne constructor.
     * @param $user
     * @param $moyenne
     */
    public function __construct($user, $moyenne)
    {
        $this->user = $user;
        $this->moyenne = $moyenne;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }




}

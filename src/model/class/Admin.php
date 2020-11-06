<?php

class Admin
{
    private $pseudo;
    private $role;

    public function __construct(string $pseudo, string $role)
    {
        $this->pseudo=$pseudo;
        $this->role=$role;
    }

    /**
     * @return string
     */
    public function getPseudo(): string { return $this->pseudo; }

    /**
     * @return string
     */
    public function getRole(): string { return $this->role; }

}

<?php


class UserNote
{
    private $user;
    private $note;

    /**
     * UserNote constructor.
     * @param User $user
     * @param Note $note
     */
    public function __construct(User $user, Note $note)
    {
        $this->user = $user;
        $this->note = $note;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return Note
     */
    public function getNote(): Note
    {
        return $this->note;
    }

    /**
     * @param Note $note
     */
    public function setNote(Note $note): void
    {
        $this->note = $note;
    }




}
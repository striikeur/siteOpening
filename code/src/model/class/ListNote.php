<?php

class ListNote {
    private $lesNotes;

    /**
     * ListNote constructor.
     * @param $lesNotes
     */
    public function __construct(array $lesNotes)
    {
        $this->lesNotes = $lesNotes;
    }

    /**
     * @return array
     */
    public function getLesNotes(): array
    {
        return $this->lesNotes;
    }

    public function getNoteByAnimePseudo(string $animeName, string $pseudo): Note
    {
        $note = NoteModel::findNoteByAnimePseudo($animeName, $pseudo);

        return $note;

    }
    public function getNoteByAnimePseudoEnding(string $animeName, string $pseudo): Note
    {
        $note = EndingNoteModel::findNoteByAnimePseudo($animeName, $pseudo);

        return $note;

    }

}

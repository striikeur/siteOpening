<?php

class NoteModel
{

    static function findAllNotes(): array {


        global $dsn, $user, $password;

        $noteGate = new NoteGateway(new Connection($dsn, $user, $password));

        return $noteGate->findAllNotes();

    }

    static function findAllNotesByUser(string $pseudo) {
        global $dsn, $user, $password;

        $noteGate = new NoteGateway(new Connection($dsn, $user, $password));


        return $noteGate->findAllNotesByUser($pseudo);

    }
    static function findAllNotesByUserNotNoted(string $pseudo) {

        global $dsn, $user, $password;

        $noteGate = new NoteGateway(new Connection($dsn, $user, $password));


        return $noteGate->findAllNotesByUserNotNoted($pseudo);

    }

    static function findAllNotesByUserPaged(string $pseudo, int $limit, int $page) {
        global $dsn, $user, $password;

        $noteGate = new NoteGateway(new Connection($dsn, $user, $password));


        return $noteGate->findAllNotesByUserPaged($pseudo, $limit, $page);

    }

    static function findAllNotesByAnime(string $animeName) {
        global $dsn, $user, $password;

        $noteGate = new NoteGateway(new Connection($dsn, $user, $password));

        return $noteGate->findAllNotesByAnime($animeName);

    }

    static function findNoteByAnimePseudo(string $animeName, string $pseudo) : Note
    {
        global $dsn, $user, $password;

        $noteGate = new NoteGateway(new Connection($dsn, $user, $password));

        $note = $noteGate->findNoteByAnimePseudo($animeName, $pseudo);
        if($note == null){
            $noteGate->createNote($animeName, $pseudo);
            $note = $noteGate->findNoteByAnimePseudo($animeName, $pseudo);
        }

        return $note;
    }


    static function updateNote(float $noteVideo, float $noteMusique, float $noteTotale, int $idAnime)
    {
        global $dsn, $user, $password;

        $noteGate = new NoteGateway(new Connection($dsn, $user, $password));
        $noteGate->updateNote($noteVideo, $noteMusique, $noteTotale, $idAnime, $_SESSION['login']);

    }

}

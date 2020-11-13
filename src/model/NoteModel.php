<?php

class NoteModel
{

    static function findAllNotes(): array {

        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 'admin') {
                return  null;
            }
        }

        global $dsn, $user, $password;

        $noteGate = new NoteGateway(new Connection($dsn, $user, $password));

        return $noteGate->findAllNotes();

    }

    static function findAllNotesByUser(string $pseudo) {
        global $dsn, $user, $password;

        $noteGate = new NoteGateway(new Connection($dsn, $user, $password));


        return $noteGate->findAllNotesByUser($pseudo);

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
        $noteGate->updateNote($noteVideo,$noteMusique,$noteTotale,$idAnime, $_SESSION['login']);

    }

}

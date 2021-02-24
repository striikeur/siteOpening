<?php
require_once(__DIR__.'/gateway/EndingNoteGateway.php');
require_once(__DIR__.'/class/Note.php');

class EndingNoteModel
{
    static function findAllNotes(): array {
        $noteGate = new EndingNoteGateway();
        return $noteGate->findAllNotes();
    }
    static function findAllNotesByUser(string $pseudo) {
        $noteGate = new EndingNoteGateway();
        return $noteGate->findAllNotesByUser($pseudo);
    }
    static function createNotes(string $username){
        $noteGate = new EndingNoteGateway();
        return $noteGate->createNotes($username);

    }
    static function countNotesByUser(string $pseudo){
        $noteGate = new EndingNoteGateway();
        return $noteGate->countNotesByUser($pseudo);
    }
    static function findAllNotesByUserNotNoted(string $pseudo) {
        $noteGate = new EndingNoteGateway();
        return $noteGate->findAllNotesByUserNotNoted($pseudo);
    }
    static function findAllNotesByUserPaged(string $pseudo, int $limit, int $page) {
        $noteGate = new EndingNoteGateway();
        return $noteGate->findAllNotesByUserPaged($pseudo, $limit, $page);
    }
    static function findAllNotesByAnime(string $animeName) {
        $noteGate = new EndingNoteGateway();
        return $noteGate->findAllNotesByAnime($animeName);
    }
    static function findNoteByAnimePseudo(string $animeName, string $pseudo) : Note
    {
        $noteGate = new EndingNoteGateway();
        $note = $noteGate->findNoteByAnimePseudo($animeName, $pseudo);
        if($note == null){
            $noteGate->createNote($animeName, $pseudo);
            $note = $noteGate->findNoteByAnimePseudo($animeName, $pseudo);
        }
        return $note;
    }
    static function updateNote(float $noteVideo, float $noteMusique, float $noteTotale, int $idAnime)
    {
        $noteGate = new EndingNoteGateway();
        $noteGate->updateNote($noteVideo, $noteMusique, $noteTotale, $idAnime, $_SESSION['login']);
    }

}
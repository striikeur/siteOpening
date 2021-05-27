<?php


class AnimeUserNoteModel
{

    public static function createAnimeUser()
    {
        $animeNote = [];
        $userNote = [];

        $user = null;

        $animes = AnimeModel::getAllAnime();
        foreach ($animes as $anime){
            AnimeModel::updateAnimeMoyenne($anime->getId());
            $notes = NoteModel::findAllNotesByAnime($anime->getName());
            foreach ($notes as $note){
                $userNote[] = new UserNote(UserModel::getUserById($note->getUserId()), $note);
            }
            $animeNote[] = new AnimeUserNote($anime, $userNote);
            $userNote = [];
        }

        return $animeNote;
    }

    public static function createUserMoyenne()
    {
        $userMoy = [];
        $users = UserModel::getUsers();
        foreach ($users as $index => $user){
            $notes = NoteModel::findAllNotesByUser($user->getPseudo());
            if(count($notes) <= 120){
                unset($users[$index]);
                continue;
            }
            $total = 0;
            $size = 0;
            foreach ($notes as $index => $note){
                $size++;
                $total += $note->getNoteTotale();
            }
            $userMoy[] = new UserMoyenne($user, $total/$size);
        }
        return $userMoy;

    }

}
<?php


class AnimeModel {
    static function getAllAnime() :array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findAllAnime();
    }

    static function getAllAnimeById(int $id) :Anime {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findAnimeById($id);

    }


    static function findAllAnimeBySeason(string $season): array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findAnimeBySeason($season);
    }

    static function getAnimeByName($name): array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findAnimeByName($name);

    }

    static function findNbAnime() : int {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findNbAnime();


    }

    static function findNbAnimeBySeason(string $season) : int {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findNbAnimeBySeason($season);


    }


    static function insertAnime(string $name, string $season, string $malLink, string $videoLink) {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        $animeGate->insertAnime($name, $season, $malLink, $videoLink);
    }


    static function deleteAnimeById(int $ID){
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));


        $animeGate->deleteAnimeById($ID);
    }

    static function  updateAnime(int $id, string $name, string $season, string $malLink, string $videoLink){
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        $animeGate->updateAnime($id, $name, $season, $malLink, $videoLink);
    }


}
<?php


class AnimeModel {
    static function getAllAnime() :array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findAllAnime();
    }

    static function getAnimeById(int $id) :Anime {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findAnimeById($id);

    }

    static function getAllAnimeByPage(int $limit, int $page) :array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findAllAnimeByPage($limit, $page);
    }




    static function findAllAnimeBySeason(string $season): array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findAnimeBySeason($season);
    }

    static function findAllAnimeBySeasonByPage(string $season, int $limit, int $page): array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findAnimeBySeasonByPage($season, $limit, $page);
    }


    static function findAllAnimeByPageNotNoted(int $limit, int $page): array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findAllAnimeByPageNotNoted($limit, $page);
    }

    static function getAnimeByName(string $name, int $limit, int $page): array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        return $animeGate->findAnimeByName($name, $limit, $page);

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


    static function insertAnime(string $name, string $season, string $malLink, string $miniature, string $videoLink) {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        $animeGate->insertAnime($name, $season, $malLink, $miniature, $videoLink);
    }


    static function deleteAnimeById(int $ID){
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));


        $animeGate->deleteAnimeById($ID);
    }

    static function  updateAnime(int $id, string $name, string $season, string $malLink, string $miniature, string $videoLink){
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway(new Connection($dsn,$user,$password));

        $animeGate->updateAnime($id, $name, $season, $malLink, $miniature, $videoLink);
    }


}
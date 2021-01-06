<?php
require_once(__DIR__.'/gateway/AnimeGateway.php');
require_once(__DIR__.'/class/Anime.php');
class AnimeModel {
    static function getAllAnime() {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway();

        return $animeGate->findAllAnime();
    }

    static function getAnimeById(int $id) :Anime {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway();

        return $animeGate->findAnimeById($id);

    }

    static function getAllAnimeByPage(int $limit, int $page) :array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway();

        return $animeGate->findAllAnimeByPage($limit, $page);
    }




    static function findAllAnimeBySeason(string $season): array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway();

        return $animeGate->findAnimeBySeason($season);
    }

    static function findAllAnimeBySeasonByPage(string $season, int $limit, int $page): array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway();

        return $animeGate->findAnimeBySeasonByPage($season, $limit, $page);
    }


    static function findAllAnimeByPageNotNoted(int $limit, int $page): array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway();

        return $animeGate->findAllAnimeByPageNotNoted($limit, $page);
    }

    static function getAnimeByName(string $name, int $limit, int $page): array {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway();

        return $animeGate->findAnimeByName($name, $limit, $page);

    }

    static function countAnime() : int {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway();

        return $animeGate->countAnime();
    }

    static function findNbAnimeBySeason(string $season) : int {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway();

        return $animeGate->findNbAnimeBySeason($season);


    }


    static function insertAnime(string $name, string $season, string $malLink, string $miniature, string $videoLink) {
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway();

        $animeGate->insertAnime($name, $season, $malLink, $miniature, $videoLink);
    }


    static function deleteAnimeById(int $ID){
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway();


        $animeGate->deleteAnimeById($ID);
    }

    static function  updateAnime(int $id, string $name, string $season, string $malLink, string $miniature, string $videoLink){
        global $dsn, $user, $password;
        $animeGate = new AnimeGateway();

        $animeGate->updateAnime($id, $name, $season, $malLink, $miniature, $videoLink);
    }


}
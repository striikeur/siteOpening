<?php

require_once(__DIR__.'/gateway/EndingGateway.php');
require_once(__DIR__.'/class/Ending.php');

class EndingModel
{
    static function getAllAnime() {
        $animeGate = new EndingGateway();

        return $animeGate->findAllAnime();
    }

    static function getAnimeById(int $id): Ending {
        $animeGate = new EndingGateway();

        return $animeGate->findAnimeById($id);

    }

    static function getAllAnimeByPage(int $limit, int $page) :array {
        $animeGate = new EndingGateway();

        return $animeGate->findAllAnimeByPage($limit, $page);
    }
    static function findAllAnimeBySeason(string $season): array {
        $animeGate = new EndingGateway();

        return $animeGate->findAnimeBySeason($season);
    }

    static function findAllAnimeBySeasonByPage(string $season, int $limit, int $page): array {
        $animeGate = new EndingGateway();

        return $animeGate->findAnimeBySeasonByPage($season, $limit, $page);
    }


    static function findAllAnimeByPageNotNoted(int $limit, int $page): array {
        $animeGate = new EndingGateway();

        return $animeGate->findAllAnimeByPageNotNoted($limit, $page);
    }

    static function getAnimeByName(string $name, int $limit, int $page): array {
        $animeGate = new EndingGateway();

        return $animeGate->findAnimeByName($name, $limit, $page);

    }

    static function countAnime(): int {
        $animeGate = new EndingGateway();

        return $animeGate->countAnime();
    }

    static function findNbAnimeBySeason(string $season): int {
        $animeGate = new EndingGateway();

        return $animeGate->findNbAnimeBySeason($season);


    }
    static function insertAnime(string $name, string $season, string $malLink, string $miniature, string $videoLink) {
        $animeGate = new EndingGateway();
        $animeGate->insertAnime($name, $season, $malLink, $miniature, $videoLink);
    }
    static function deleteAnimeById(int $ID){
        $animeGate = new EndingGateway();
        $animeGate->deleteAnimeById($ID);
    }
    static function  updateAnime(int $id, string $name, string $season, string $malLink, string $miniature, string $videoLink){
        $animeGate = new EndingGateway();

        $animeGate->updateAnime($id, $name, $season, $malLink, $miniature, $videoLink);
    }
    static function updateAnimeMoyenne(int $id){
        $animeGate = new EndingGateway();

        $animeGate->updateAnimeMoyenne($id);
    }

    static function updateNSFW(int $idAnime){
        $animeGate = new EndingGateway();

        $animeGate->updateNSFW($idAnime);
    }
    static function updateSpoiler(int $idAnime){
        $animeGate = new EndingGateway();

        $animeGate->updateSpoiler($idAnime);
    }
}
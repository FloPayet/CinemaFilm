<?php

namespace App\Model;

use PDO;

class CinemashowManager extends AbstractManager
{
    public const TABLE = 'cinemashow';

    /**
     * Récuperer les infos des table cinemashow/room/movie
     */
    public function selectJoinById(int $id)
    {
        $statement = $this->pdo->prepare("SELECT m.*, r.*, cs.*
        FROM cinemashow cs
        JOIN room r ON cs.id_room = r.id
        JOIN movie m ON cs.id_movie = m.id
        WHERE m.id = :id");
        $statement->bindValue('id', $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll();
    }
}

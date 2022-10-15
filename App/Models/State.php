<?php

namespace App\Models;

use Core\Model;
use PDO;

class State extends Model
{
    public static function fetchAll(): array
    {
        $sql = "SELECT * FROM states ORDER BY id";
        $pdo=Model::getDB();
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}
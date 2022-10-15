<?php

namespace App\Models;

use Core\Model;
use PDO;

class Block extends Model
{

    public static function getByDistrict($did){

        $sql = "SELECT * FROM blocks WHERE district_id ='$did'";
        $pdo=Model::getDB();
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }



}
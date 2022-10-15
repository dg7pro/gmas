<?php

namespace App\Models;

use Core\Model;
use PDO;

class District extends Model
{

    public static function getByState($sid){

        $sql = "SELECT * FROM districts WHERE sid ='$sid'";
        $pdo=Model::getDB();
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}
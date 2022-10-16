<?php

namespace App\Models;

use Core\Model;
use PDO;

class Member extends Model
{
    /**
     * Error message
     *
     * @var array
     */
    public $errors = [];

    /**
     * User constructor.
     * @param array $data
     */
    public function __construct($data=[])
    {
        foreach ($data as $key => $value){
            $this->$key=$value;
        }
    }

    public static function countThisMobile($mobile): int
    {

        $sql = "SELECT * FROM members WHERE mobile= :mobile";
        $db = static::getDB();

        $stmt=$db->prepare($sql);
        $stmt->bindParam(':mobile',$mobile,PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->rowCount();

    }

    public static function liveSearch($start, $limit){

        $query = "SELECT members.*,
                states.id AS sid, 
                states.text AS state,
                districts.id AS did,
                districts.text AS district,
                blocks.id AS bid,
                blocks.text AS block
                FROM members
                LEFT JOIN states ON states.id = members.state_id
                LEFT JOIN districts ON districts.id = members.district_id
                LEFT JOIN blocks ON blocks.id = members.block_id
                ";

        if($_POST['query'] != ''){
            $query .= '
            WHERE name LIKE "%'.str_replace('', '%', $_POST['query']).'%" 
            OR mobile LIKE "%'.str_replace('', '%', $_POST['query']).'%" 
            OR whatsapp LIKE "%'.str_replace('', '%', $_POST['query']).'%" 
            ';
        }

        $query .= ' ORDER BY id DESC ';

        $filter_query = $query . 'LIMIT '.$start.','.$limit.'';

        $pdo=Model::getDB();
        $stmt=$pdo->prepare($filter_query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public static function liveSearchCount(){

        //$query = "SELECT * FROM members";
        $query = "SELECT members.*,
                states.id AS sid, 
                states.text AS state,
                districts.id AS did,
                districts.text AS district,
                blocks.id AS bid,
                blocks.text AS block
                FROM members
                LEFT JOIN states ON states.id = members.state_id
                LEFT JOIN districts ON districts.id = members.district_id
                LEFT JOIN blocks ON blocks.id = members.block_id";

        if($_POST['query'] != ''){
            $query .= '
            WHERE name LIKE "%'.str_replace('', '%', $_POST['query']).'%" 
            OR mobile LIKE "%'.str_replace('', '%', $_POST['query']).'%" 
            OR whatsapp LIKE "%'.str_replace('', '%', $_POST['query']).'%" 
            ';
        }




        $pdo=Model::getDB();
        $stmt=$pdo->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();


    }



    public static function liveBlockSearch($start, $limit){

        $query = "SELECT members.*,
                states.id AS sid, 
                states.text AS state,
                districts.id AS did,
                districts.text AS district,
                blocks.id AS bid,
                blocks.text AS blockn
                FROM members
                LEFT JOIN states ON states.id = members.state_id
                LEFT JOIN districts ON districts.id = members.district_id
                LEFT JOIN blocks ON blocks.id = members.block_id
                ";

        if($_POST['query'] != '' && $_POST['type'] == 'b'){
            $query .= '
            WHERE members.block_id = "'.$_POST['query'].'"
            ';
        }

        if($_POST['query'] != '' && $_POST['type'] == 'd'){
            $query .= '
            WHERE members.district_id = "'.$_POST['query'].'"
            ';
        }

        if($_POST['query'] != '' && $_POST['type'] == 's'){
            $query .= '
            WHERE members.state_id = "'.$_POST['query'].'"
            ';
        }

        $query .= ' ORDER BY id DESC ';

        $filter_query = $query . 'LIMIT '.$start.','.$limit.'';

        $pdo=Model::getDB();
        $stmt=$pdo->prepare($filter_query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public static function liveBlockSearchCount(){

        //$query = "SELECT * FROM members";
        $query = "SELECT members.*,
                states.id AS sid, 
                states.text AS state,
                districts.id AS did,
                districts.text AS district,
                blocks.id AS bid,
                blocks.text AS blockn
                FROM members
                LEFT JOIN states ON states.id = members.state_id
                LEFT JOIN districts ON districts.id = members.district_id
                LEFT JOIN blocks ON blocks.id = members.block_id";

        if($_POST['query'] != '' && $_POST['type'] == 'b'){
            $query .= '
            WHERE members.block_id = "'.$_POST['query'].'"
            ';
        }

        if($_POST['query'] != '' && $_POST['type'] == 'd'){
            $query .= '
            WHERE members.district_id = "'.$_POST['query'].'"
            ';
        }

        if($_POST['query'] != '' && $_POST['type'] == 's'){
            $query .= '
            WHERE members.state_id = "'.$_POST['query'].'"
            ';
        }


        $pdo=Model::getDB();
        $stmt=$pdo->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();

    }


    public static function livePrabhariSearch($start, $limit){

        $query = "SELECT members.*,
                states.id AS sid, 
                states.text AS state,
                districts.id AS did,
                districts.text AS district,
                blocks.id AS bid,
                blocks.text AS blockn
                FROM members
                LEFT JOIN states ON states.id = members.state_id
                LEFT JOIN districts ON districts.id = members.district_id
                LEFT JOIN blocks ON blocks.id = members.block_id
                WHERE members.prabhari != 'None' ";

        if($_POST['query'] != '' && $_POST['type'] == 'b'){
            $query .= '
            AND members.block_id = "'.$_POST['query'].'"
            ';
        }

        if($_POST['query'] != '' && $_POST['type'] == 'd'){
            $query .= '
            AND members.district_id = "'.$_POST['query'].'"
            ';
        }

        if($_POST['query'] != '' && $_POST['type'] == 's'){
            $query .= '
            AND members.state_id = "'.$_POST['query'].'"
            ';
        }

        $query .= ' ORDER BY id DESC ';

        $filter_query = $query . 'LIMIT '.$start.','.$limit.'';

        $pdo=Model::getDB();
        $stmt=$pdo->prepare($filter_query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public static function livePrabhariSearchCount(){

        //$query = "SELECT * FROM members";
        $query = "SELECT members.*,
                states.id AS sid, 
                states.text AS state,
                districts.id AS did,
                districts.text AS district,
                blocks.id AS bid,
                blocks.text AS blockn
                FROM members
                LEFT JOIN states ON states.id = members.state_id
                LEFT JOIN districts ON districts.id = members.district_id
                LEFT JOIN blocks ON blocks.id = members.block_id
                WHERE members.prabhari != 'None' ";

        if($_POST['query'] != '' && $_POST['type'] == 'b'){
            $query .= '
            AND members.block_id = "'.$_POST['query'].'"
            ';
        }

        if($_POST['query'] != '' && $_POST['type'] == 'd'){
            $query .= '
            AND members.district_id = "'.$_POST['query'].'"
            ';
        }

        if($_POST['query'] != '' && $_POST['type'] == 's'){
            $query .= '
            AND members.state_id = "'.$_POST['query'].'"
            ';
        }


        $pdo=Model::getDB();
        $stmt=$pdo->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();

    }

    public static function fetch($mid){

        $sql = "SELECT members.*,
            districts.text as district_name,
            blocks.text as block_name
            FROM members 
            LEFT JOIN districts ON districts.id = members.district_id
            LEFT JOIN blocks ON blocks.id = members.block_id
            WHERE members.id=?";
        $pdo=Model::getDB();
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$mid]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function update($arr){

        $name = $arr['name'];
        $gender = $arr['gender'];
        $dob = $arr['dob'];
        $mobile = $arr['mobile'];
        $whatsapp = $arr['whatsapp'];
        $email = $arr['email'];
        $state = $arr['state'];
        $district = $arr['district'];
        $addr = $arr['addr'];
        $location = $arr['location'];
        $block = $arr['block'];
        $prabhari = $arr['prabhari'];
        $panchayat = $arr['panchayat'];
        $verified = $arr['verified'];
        $important = $arr['important'];
        $id = $arr['id'];

        $sql = "UPDATE members SET name=?, gender=?, dob=?, mobile=?, whatsapp=?, email=?, state_id=?, district_id=?, 
                   address=?, location=?, block_id=?, prabhari=?, panchayat=?, is_verified=?, is_important=? WHERE id=?";
        $pdo=Model::getDB();
        $stmt=$pdo->prepare($sql);
        return $stmt->execute([$name,$gender,$dob,$mobile,$whatsapp,$email,$state,$district,$addr,$location,$block,$prabhari,$panchayat,$verified,$important,$id]);

    }


    public function save(): bool
    {

        $this->validate();

        if(empty($this->errors)){

            $block = (isset($this->block))?$this->block:'';

            $address = $this->address;
            $address = strip_tags($address);
            $address = str_replace('\r\n', '\n', $address);
            $address = nl2br($address);

            $sql = 'INSERT INTO members (name,mobile,whatsapp,gender,location,state_id,district_id,block_id,address)
                    VALUES (:name, :mobile, :whatsapp, :gender, :location, :state, :district, :block, :address)';

            $db = static::getDB();
            $stmt = $db->prepare($sql);

            $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindValue(':mobile', $this->mobile, PDO::PARAM_STR);
            $stmt->bindValue(':whatsapp', $this->whatsapp, PDO::PARAM_STR);
            $stmt->bindValue(':gender', $this->gender, PDO::PARAM_INT);
            $stmt->bindValue(':location', $this->location, PDO::PARAM_INT);
            $stmt->bindValue(':state', $this->state, PDO::PARAM_INT);
            $stmt->bindValue(':district', $this->district, PDO::PARAM_INT);
            $stmt->bindValue(':block', $block, PDO::PARAM_INT);
            $stmt->bindValue(':address', $address, PDO::PARAM_STR);

            return $stmt->execute();

        }

        return false;
    }

    public function savePrabhari(): bool
    {

        $this->validate();

        if(empty($this->errors)){

            $block = (isset($this->block))?$this->block:'';

            $address = $this->address;
            $address = strip_tags($address);
            $address = str_replace('\r\n', '\n', $address);
            $address = nl2br($address);

            $sql = 'INSERT INTO members (name,mobile,whatsapp,gender,location,state_id,district_id,block_id,prabhari,panchayat,address)
                    VALUES (:name, :mobile, :whatsapp, :gender, :location, :state, :district, :block, :prabhari, :panchayat, :address)';

            $db = static::getDB();
            $stmt = $db->prepare($sql);

            $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindValue(':mobile', $this->mobile, PDO::PARAM_STR);
            $stmt->bindValue(':whatsapp', $this->whatsapp, PDO::PARAM_STR);
            $stmt->bindValue(':gender', $this->gender, PDO::PARAM_STR);
            $stmt->bindValue(':location',1, PDO::PARAM_BOOL);
            $stmt->bindValue(':state', $this->state, PDO::PARAM_STR);
            $stmt->bindValue(':district', $this->district, PDO::PARAM_STR);
            $stmt->bindValue(':block', $block, PDO::PARAM_STR);
            $stmt->bindValue(':address', $address, PDO::PARAM_STR);
            $stmt->bindValue(':prabhari', $this->prabha, PDO::PARAM_STR);
            $stmt->bindValue(':panchayat', $this->panchayat, PDO::PARAM_STR);

            return $stmt->execute();

        }

        return false;
    }


    /**
     * Validate User Input
     */
    public function validate(){

        if (!preg_match("/^([a-zA-Z']{3,}+[\ ]+([\ A-Za-z]+){2,})$/", $this->name)) {
            $this->errors[] = 'Please enter your name in correct format';
        }

        // mobile address
        if (!preg_match("/^[6-9]\d{9}$/",$this->mobile)) {
            $this->errors[] = 'Please enter a valid 10 digits mobile no.';
        }

        if($this->mobileExists($this->mobile)){
            $this->errors[] = 'Mobile already exists in our database';
        }

    }

    /**
     * @param $mobile
     * @param string $ignore_id
     * @return bool
     */
    public function mobileExists($mobile, string $ignore_id=''): bool
    {

        $member = static::findByMobile($mobile);

        if($member){
            if($ignore_id != $member->id){
                return true;
            }
        }
        return false;

    }

    /**
     * @param $mobile
     * @return mixed
     */
    public static function findByMobile($mobile){

        $sql = "SELECT * FROM members WHERE mobile= :mobile";
        $db = static::getDB();

        $stmt=$db->prepare($sql);
        $stmt->bindParam(':mobile',$mobile,PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_called_class());
        $stmt->execute();

        return $stmt->fetch();
    }






}
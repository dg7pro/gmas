<?php

namespace App\Controllers;

use App\Models\Block;
use App\Models\District;
use App\Models\Member;
use App\Models\User;
use Core\Controller;

class Ajax extends Controller
{
    public function checkName(){

        if(isset($_POST['nm'])){

            $nm = $_POST['nm'];

            if($nm == '' ){
                $n=0;
                $ht = '<span class="text-danger">भरना अनिवार्य है</span>';
            }
            elseif (!preg_match("/^([a-zA-Z']{3,}+[\ ]+([\ A-Za-z]+){2,})$/",$nm)) {
                $n=0;
                $ht = '<span class="text-danger">अपना पहला और अंतिम नाम दर्ज करें</span>';
            }
            else{
                $n=1;
                $ht = '<span class="text-success"><b>ठीक है</b></span>';
            }
        }

        $re = ['n'=>$n,'ht'=>$ht];
        echo json_encode($re);
    }

    public function checkMobile(){

        if(isset($_POST['mb'])){

            $mb = $_POST['mb'];

            if($mb == '' ){
                $n=0;
                $ht = '<span class="text-danger">भरना अनिवार्य है</span>';
            }
            elseif (!preg_match("/^[6-9]\d{9}$/",$mb)) {
                $n=0;
                $ht = '<span class="text-danger">10 अंकों का वैध मोबाइल नंबर दर्ज करें</span>';
            }
            else{
                $num = Member::countThisMobile($mb);

                if($num>0){
                    $n=0;
                    $ht = '<span class="text-danger"><b>यह मोबाइल हमारे डेटाबेस में मौजूद है</b></span>';
                }else{
                    $n=1;
                    $ht = '<span class="text-success"><b>ठीक है</b></span>';
                }
            }
        }

        $re = ['n'=>$n,'ht'=>$ht];
        echo json_encode($re);


    }

    /**
     * Validate User Email
     */
    public function checkEmailAction(){

        if(isset($_POST['em'])){

            $em = $_POST['em'];

            if($em=='' ){
                $n=0;
                $ht = '<span class="text-danger">Empty value</span>';
            }
            elseif (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                $n=0;
                $ht = '<span class="text-danger">Enter valid email address</span>';
            }
            else{

                $user = User::findByEmail($em);

                //var_dump($num);
                if($user){
                    $n=0;
                    $ht = '<span class="text-danger">This email exist in our database</span>';
                }else{
                    $n=1;
                    $ht = '<span class="text-success">Looks Good!</span>';
                }
            }
        }

        $re = ['n'=>$n,'ht'=>$ht];
        echo json_encode($re);
    }

    /**
     * Validate User Password
     */
    public function checkPasswordAction(){

        if(isset($_POST['pw'])){

            $pw = $_POST['pw'];

            if($pw == '' ){
                $n=0;
                $ht = '<span class="text-danger">Empty value</span>';
            }
            // !preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*^#?&]{7,}$/",$pw)
            // ^(?=.*[a-zA-Z]).{7,}$
            elseif (!preg_match("/^([A-Za-z\d@$!%*^#?&]){7,}$/",$pw)) {
                $n=0;
                $ht = '<span class="text-danger">minimum 7 char long</span>';
            }
            else{
                $n=1;
                $ht = '<span class="text-success">Looks Good!</span>';
            }
        }

        $re = ['n'=>$n,'ht'=>$ht];
        echo json_encode($re);
    }






    public function selectDistrict(){

        if(isset($_POST['state_id'])){

            $sid = $_POST['state_id'];

            $result = District::getByState($sid);

            // Generate HTML of city options list
            if(count($result) > 0){
                echo '<option value="">Select city</option>';
                foreach($result as $row){
                    echo '<option value="'.$row['id'].'">'.$row['text'].'</option>';
                }
            }else{
                echo '<option value="">District not available</option>';
            }


        }
    }

    public function selectBlock(){

        if(isset($_POST['district_id'])){

            $did = $_POST['district_id'];

            $result = Block::getByDistrict($did);

            // Generate HTML of city options list
            if(count($result) > 0){
                echo '<option value="">Select block</option>';
                foreach($result as $row){
                    echo '<option value="'.$row['id'].'">'.$row['text'].'</option>';
                }
            }else{
                echo '<option value="">Blocks not available</option>';
            }


        }
    }


}
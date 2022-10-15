<?php

namespace App\Controllers;

use App\Flash;
use App\Models\Member;
use App\Models\State;
use Core\View;

class Join extends \Core\Controller
{

    public function satyaAction(){
        var_dump($_POST);
        //exit();
        $mem = new Member($_POST);

        //if($user->save()){

        if($mem->save()){

            // Flash the success message
            Flash::addMessage('Account Created Successfully');
            $this->redirect('/home/index');

        }else{

            foreach($mem->errors as $error){
                Flash::addMessage($error,'danger');
            }

//            View::renderBlade('register.index2',['arr'=>$_POST]);

        }

        $this->redirect('/home/index');
    }

    public function prabhariAction(){
//        var_dump($_POST);
//        exit();

        $mem = new Member($_POST);

        if($mem->savePrabhari()){

            // Flash the success message
            Flash::addMessage('Account Created Successfully');
            //$this->redirect('/home/prabhari-registration');

        }else{

            foreach($mem->errors as $error){
                Flash::addMessage($error,'danger');
            }

        }

        $this->redirect('/home/prabhari-registration');
    }


}
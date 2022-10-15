<?php

namespace App\Controllers;

use App\Models\Member;
use App\Models\State;
use Core\Controller;
use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        $states = State::fetchAll();
        View::renderBlade('home/index',['states'=>$states]);
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function sessionAction()
    {
       var_dump($_SESSION);
    }

    /**
     * Show the about-us page
     *
     * @return void
     */
    public function aboutUsAction()
    {
        View::renderBlade('home/about_us');
    }

    /**
     * Show the our-mission page
     *
     * @return void
     */
    public function ourMissionAction()
    {
        View::renderBlade('home/our_mission');
    }

    /**
     * Show the our-mission page
     *
     * @return void
     */
    public function contactUsAction()
    {
        View::renderBlade('home/contact_us');
    }


    /**
     * Show error page not found page
     *
     * @return void
     */
    public function pageNotFoundAction()
    {
        View::renderBlade('404');
    }

    /**
     * Show error unauthorized access page
     *
     * @return void
     */
    public function unAuthorizedAccessAction()
    {
        View::renderBlade('401');
    }

    /**
     * Show internal server error page
     *
     * @return void
     */
    public function internalServerErrorAction()
    {
        View::renderBlade('500');
    }

    public function testAction(){

        $memberInfo = Member::fetch(17);
        $memberInfo['pg']=$_SESSION['x_page'];
        $memberInfo['qu']=$_SESSION['x_query'];
        $memberInfo['ty']=$_SESSION['x_type'];
        var_dump($memberInfo);
    }

    /**
     * Show the our-mission page
     *
     * @return void
     */
    public function prabhariRegistrationAction()
    {
        $states = State::fetchAll();
        View::renderBlade('home/prabhari',['states'=>$states]);
    }


}

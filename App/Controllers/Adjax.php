<?php


namespace App\Controllers;

use App\Models\Member;
use App\Models\User;

/**
 * Class Adjax Controller
 *
 * @package App\Controllers
 */
class Adjax extends Administered
{



    /**
     * Fetch user course association
     */
    public function fetchUserCourseRecord(){

        $user_id = $_POST['userId'];
        $thisUser = User::findByID($user_id);
        $results = $thisUser->groups();
        $results_count = count($results);

        $output = '<table class="table table-striped table-bordered">
                    <tr>
                    <th>Group Name</th>
                    </tr>';

        if($results_count > 0){
            foreach($results as $row){
                $output .= '<tr>
                <td>'.$row->name.'</td></tr>';
            }
        }
        else{
            $output .= '<tr><td colspan="4">No data found</td></tr>';
        }

        $output .= '</table>';
        echo $output;
    }

    /**
     * Search user dynamically
     */
    public function searchMembers(){

        $limit = 10;
        $page = 1;

        if($_POST['page'] > 1){
            $start = (($_POST['page']-1) * $limit);
            $page = $_POST['page'];
        }else{
            $start = 0;
        }

        $results = Member::liveSearch($start,$limit);
        $total_data = Member::liveSearchCount();

        $output = '<label>Total Records - '.$total_data.'</label>
            <table class="table table-striped">
                <tr>
                    <th>SNo.</th>
                    <th>Gender</th>  
                    <th>Name</th>                                                           
                    <th>Mobile</th>
                    <th>Whatsapp</th> 
                    <th>Location</th>                                        
                    <th>Block</th>                    
                    <th>District</th>                    
                    <th>State</th>
                    <th>Address</th></tr>';

        if($total_data > 0){

            foreach($results as $row){
                $output .= '<tr>
                <td>'.$row->id.'</td>                                          
                <td>'.($row->gender==1?'M':'F').'</td> 
                <td>'.$row->name.'</td>                           
                <td>'.$row->mobile.'</td>
                <td>'.$row->whatsapp.'</td>
                <td>'.($row->location==1?'Rural (ग्रामीण)':'Urban (शहरी)').'</td>
                <td>'.$row->block.'</td>
                <td>'.$row->district.'</td>
                <td>'.$row->state.'</td>
                <td>'.$row->address.'</td>               
                </tr>';
            }

        }
        else{

            $output .= '<tr><td colspan="4">No data found</td></tr>';

        }

        $output .= '</table></br>
            <div align="center">
                <ul class="pagination">
        ';

        $total_links = ceil($total_data/$limit);
        $previous_link = '';
        $next_link = '';
        $page_link ='';

        if($total_links > 4){
            if($page<5){
                for($count=1; $count<=5; $count++){

                    $page_array[]=$count;
                }
                $page_array[]='...';
                $page_array[]=$total_links;
            }else{
                $end_limit = $total_links - 5 ;
                if($page > $end_limit){

                    $page_array[] = 1;
                    $page_array[] = '...';

                    for($count=$end_limit; $count<=$total_links; $count++){
                        $page_array[]=$count;
                    }
                }else{
                    $page_array[]=1;
                    $page_array[]='...';
                    for($count = $page-1; $count<=$page+1; $count++){
                        $page_array[]=$count;
                    }
                    $page_array[]=1;
                    $page_array[]=$total_links;
                }
            }
        }
        else{
            for($count=1; $count <= $total_links; $count++){
                $page_array[] = $count;
            }
        }
        // checked

        for($count = 0; $count < count($page_array); $count++)
        {
            if($page == $page_array[$count])
            {
                $page_link .= '<li class="page-item active">
                      <a class="page-link" href="#">'.$page_array[$count].' <span class="sr-only">(current)</span></a>
                    </li>
                    ';

                $previous_id = $page_array[$count] - 1;
                if($previous_id > 0)
                {
                    $previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$previous_id.'">Previous</a></li>';
                }
                else
                {
                    $previous_link = '<li class="page-item disabled">
                        <a class="page-link" href="#">Previous</a>
                      </li>
                      ';
                }
                $next_id = $page_array[$count] + 1;
                if($next_id >= $total_links)
                {
                    $next_link = '<li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                      </li>';
                }
                else
                {
                    $next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$next_id.'">Next</a></li>';
                }
            }
            else
            {
                if($page_array[$count] == '...')
                {
                    $page_link .= '
                      <li class="page-item disabled">
                          <a class="page-link" href="#">...</a>
                      </li>
                      ';
                }
                else
                {
                    $page_link .= '<li class="page-item"><a class="page-link" href="javascript:void(0)" 
                    data-page_number="'.$page_array[$count].'">'.$page_array[$count].'</a></li>';
                }
            }
        }

        $output .= $previous_link . $page_link . $next_link;
        $output .= '</ul></div>';

        echo $output;
    }
    /* *** */

    /**
     * Search user dynamically
     */
    public function searchUser(){

        $limit = 10;
        $page = 1;

        if($_POST['page'] > 1){
            $start = (($_POST['page']-1) * $limit);
            $page = $_POST['page'];
        }else{
            $start = 0;
        }

        $results = User::liveSearch($start,$limit);
        $total_data = User::liveSearchCount();

        $output = '<label>Total Records - '.$total_data.'</label>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>id</th>
                    <th>name</th>                                   
                    <th>mobile</th>
                    <th>email</th> 
                    <th>verified</th>                                        
                    <th>is_admin</th>    
                    <th>status</th>                 
                    <th>control</th></tr>';

        if($total_data > 0){

            foreach($results as $row){
                $output .= '<tr>
                <td>'.$row->id.'</td>
                <td>'.$row->name.'</td>                            
                <td>'.$row->mobile.'</td>
                <td>'.$row->email.'</td>
                <td>'.($row->is_verified?'Yes':'No').'</td>
                <td>'.($row->is_admin?'Yes':'No').'</td>    
                <td><button onclick="getUserProfileInfo('.$row->id.')" type="button" class="mb-1 btn btn-sm btn-success">View</button></td>
                <td>
                    <button onclick="verifyUser('.$row->id.')" type="button" class="mb-1 btn btn-sm btn-info">Verify</button>
                    <button onclick="makeAdmin('.$row->id.')" type="button" class="mb-1 btn btn-sm btn-danger">Admin</button>
                </td>
                </tr>';
            }

        }
        else{

            $output .= '<tr><td colspan="4">No data found</td></tr>';

        }

        $output .= '</table></br>
            <div align="center">
                <ul class="pagination">
        ';

        $total_links = ceil($total_data/$limit);
        $previous_link = '';
        $next_link = '';
        $page_link ='';

        if($total_links > 4){
            if($page<5){
                for($count=1; $count<=5; $count++){

                    $page_array[]=$count;
                }
                $page_array[]='...';
                $page_array[]=$total_links;
            }else{
                $end_limit = $total_links - 5 ;
                if($page > $end_limit){

                    $page_array[] = 1;
                    $page_array[] = '...';

                    for($count=$end_limit; $count<=$total_links; $count++){
                        $page_array[]=$count;
                    }
                }else{
                    $page_array[]=1;
                    $page_array[]='...';
                    for($count = $page-1; $count<=$page+1; $count++){
                        $page_array[]=$count;
                    }
                    $page_array[]=1;
                    $page_array[]=$total_links;
                }
            }
        }
        else{
            for($count=1; $count <= $total_links; $count++){
                $page_array[] = $count;
            }
        }
        // checked

        for($count = 0; $count < count($page_array); $count++)
        {
            if($page == $page_array[$count])
            {
                $page_link .= '<li class="page-item active">
                      <a class="page-link" href="#">'.$page_array[$count].' <span class="sr-only">(current)</span></a>
                    </li>
                    ';

                $previous_id = $page_array[$count] - 1;
                if($previous_id > 0)
                {
                    $previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$previous_id.'">Previous</a></li>';
                }
                else
                {
                    $previous_link = '<li class="page-item disabled">
                        <a class="page-link" href="#">Previous</a>
                      </li>
                      ';
                }
                $next_id = $page_array[$count] + 1;
                if($next_id >= $total_links)
                {
                    $next_link = '<li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                      </li>';
                }
                else
                {
                    $next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$next_id.'">Next</a></li>';
                }
            }
            else
            {
                if($page_array[$count] == '...')
                {
                    $page_link .= '
                      <li class="page-item disabled">
                          <a class="page-link" href="#">...</a>
                      </li>
                      ';
                }
                else
                {
                    $page_link .= '<li class="page-item"><a class="page-link" href="javascript:void(0)" 
                    data-page_number="'.$page_array[$count].'">'.$page_array[$count].'</a></li>';
                }
            }
        }

        $output .= $previous_link . $page_link . $next_link;
        $output .= '</ul></div>';

        echo $output;
    }

    public function blockMembers(){

        $_SESSION['x_page'] = $_POST['page'];
        $_SESSION['x_query'] = $_POST['query'];
        $_SESSION['x_type'] = $_POST['type'];

        $limit = 5;
        $page = 1;
        //$page_array[]=null;

        if($_POST['page'] > 1){
            $start = (($_POST['page']-1) * $limit);
            $page = $_POST['page'];
        }else{
            $start = 0;
        }

        $results = Member::liveBlockSearch($start,$limit);
        $total_data = Member::liveBlockSearchCount();

        $output = '<label>Total Records - '.$total_data.'</label>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>id</th>
                    <th>name</th>                               
                    <th>gen</th>                               
                    <th>mobile</th>
                    <th>w\'app</th> 
                    <th>district</th>                                        
                    <th>block</th>
                    <th>prabhari</th>                    
                    <th>view</th>                    
                    </tr>';

        if($total_data > 0){

            foreach($results as $row){
                $output .= '<tr>
                <td class="'.( $row->is_important==1?'bg-info':'' ).'">'.$row->id.'</td>
                <td>'.$row->name.'</td>                           
                <td>'.($row->gender==1?'M':'F').'</td>                           
                <td>'.$row->mobile.'</td>
                <td>'.$row->whatsapp.'</td>
                <td>'.$row->district.'</td>
                <td>'.$row->blockn.'</td>
                <td class="'.( $row->prabhari!='None'?'bg-warning':'' ).'">'.$row->prabhari.'</td>
                <td><button onclick="getMemberInfo('.$row->id.')" type="button" class="mb-1 btn btn-sm btn-info">Manage</button></td>
                </tr>';
            }

        }
        else{

            $output .= '<tr><td colspan="9">No data found</td></tr>';

        }

        $output .= '</table></br>
            <div align="center">
                <ul class="pagination">
        ';

        $total_links = ceil($total_data/$limit);
        $previous_link = '';
        $next_link = '';
        $page_link ='';

        if($total_links > 4){
            if($page<5){
                for($count=1; $count<=5; $count++){

                    $page_array[]=$count;
                }
                $page_array[]='...';
                $page_array[]=$total_links;
            }else{
                $end_limit = $total_links - 5 ;
                if($page > $end_limit){

                    $page_array[] = 1;
                    $page_array[] = '...';

                    for($count=$end_limit; $count<=$total_links; $count++){
                        $page_array[]=$count;
                    }
                }else{
                    $page_array[]=1;
                    $page_array[]='...';
                    for($count = $page-1; $count<=$page+1; $count++){
                        $page_array[]=$count;
                    }
                    $page_array[]=1;
                    $page_array[]=$total_links;
                }
            }
        }
        else{
            for($count=1; $count <= $total_links; $count++){

                $page_array[] = $count;
            }
        }
        // checked
        $page_array[]=0;
        for($count = 0; $count < count($page_array); $count++)
        {
            if($page == $page_array[$count])
            {
                $page_link .= '<li class="page-item active">
                      <a class="page-link" href="#">'.$page_array[$count].' <span class="sr-only">(current)</span></a>
                    </li>
                    ';

                $previous_id = $page_array[$count] - 1;
                if($previous_id > 0)
                {
                    $previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$previous_id.'">Previous</a></li>';
                }
                else
                {
                    $previous_link = '<li class="page-item disabled">
                        <a class="page-link" href="#">Previous</a>
                      </li>
                      ';
                }
                $next_id = $page_array[$count] + 1;
                if($next_id >= $total_links)
                {
                    $next_link = '<li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                      </li>';
                }
                else
                {
                    $next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$next_id.'">Next</a></li>';
                }
            }
            else
            {
                if($page_array[$count] == '...')
                {
                    $page_link .= '
                      <li class="page-item disabled">
                          <a class="page-link" href="#">...</a>
                      </li>
                      ';
                }
                else
                {
                    $page_link .= '<li class="page-item"><a class="page-link" href="javascript:void(0)" 
                    data-page_number="'.$page_array[$count].'">'.$page_array[$count].'</a></li>';
                }
            }
        }

        $output .= $previous_link . $page_link . $next_link;
        $output .= '</ul></div>';

        echo $output;
    }



    public function prabhariMembers(){

        $_SESSION['x_page'] = $_POST['page'];
        $_SESSION['x_query'] = $_POST['query'];
        $_SESSION['x_type'] = $_POST['type'];

        $limit = 5;
        $page = 1;
        //$page_array[]=null;

        if($_POST['page'] > 1){
            $start = (($_POST['page']-1) * $limit);
            $page = $_POST['page'];
        }else{
            $start = 0;
        }

        $results = Member::livePrabhariSearch($start,$limit);
        $total_data = Member::livePrabhariSearchCount();

        $output = '<label>Total Records - '.$total_data.'</label>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>id</th>
                    <th>name</th>                               
                    <th>gen</th>                               
                    <th>mobile</th>
                    <th>w\'app</th> 
                    <th>district</th>                                        
                    <th>block</th>
                    <th>prabhari</th>                    
                    <th>view</th>                    
                    </tr>';

        if($total_data > 0){

            foreach($results as $row){
                $output .= '<tr>
                <td class="'.( $row->is_important==1?'bg-info':'' ).'">'.$row->id.'</td>
                <td>'.$row->name.'</td>                           
                <td>'.($row->gender==1?'M':'F').'</td>                           
                <td>'.$row->mobile.'</td>
                <td>'.$row->whatsapp.'</td>
                <td>'.$row->district.'</td>
                <td>'.$row->blockn.'</td>
                <td class="'.( $row->prabhari!='None'?'bg-warning':'' ).'">'.$row->prabhari.'</td>
                <td><button onclick="getMemberInfo('.$row->id.')" type="button" class="mb-1 btn btn-sm btn-info">Manage</button></td>
                </tr>';
            }

        }
        else{

            $output .= '<tr><td colspan="9">No data found</td></tr>';

        }

        $output .= '</table></br>
            <div align="center">
                <ul class="pagination">
        ';

        $total_links = ceil($total_data/$limit);
        $previous_link = '';
        $next_link = '';
        $page_link ='';

        if($total_links > 4){
            if($page<5){
                for($count=1; $count<=5; $count++){

                    $page_array[]=$count;
                }
                $page_array[]='...';
                $page_array[]=$total_links;
            }else{
                $end_limit = $total_links - 5 ;
                if($page > $end_limit){

                    $page_array[] = 1;
                    $page_array[] = '...';

                    for($count=$end_limit; $count<=$total_links; $count++){
                        $page_array[]=$count;
                    }
                }else{
                    $page_array[]=1;
                    $page_array[]='...';
                    for($count = $page-1; $count<=$page+1; $count++){
                        $page_array[]=$count;
                    }
                    $page_array[]=1;
                    $page_array[]=$total_links;
                }
            }
        }
        else{
            for($count=1; $count <= $total_links; $count++){

                $page_array[] = $count;
            }
        }
        // checked
        $page_array[]=0;
        for($count = 0; $count < count($page_array); $count++)
        {
            if($page == $page_array[$count])
            {
                $page_link .= '<li class="page-item active">
                      <a class="page-link" href="#">'.$page_array[$count].' <span class="sr-only">(current)</span></a>
                    </li>
                    ';

                $previous_id = $page_array[$count] - 1;
                if($previous_id > 0)
                {
                    $previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$previous_id.'">Previous</a></li>';
                }
                else
                {
                    $previous_link = '<li class="page-item disabled">
                        <a class="page-link" href="#">Previous</a>
                      </li>
                      ';
                }
                $next_id = $page_array[$count] + 1;
                if($next_id >= $total_links)
                {
                    $next_link = '<li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                      </li>';
                }
                else
                {
                    $next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$next_id.'">Next</a></li>';
                }
            }
            else
            {
                if($page_array[$count] == '...')
                {
                    $page_link .= '
                      <li class="page-item disabled">
                          <a class="page-link" href="#">...</a>
                      </li>
                      ';
                }
                else
                {
                    $page_link .= '<li class="page-item"><a class="page-link" href="javascript:void(0)" 
                    data-page_number="'.$page_array[$count].'">'.$page_array[$count].'</a></li>';
                }
            }
        }

        $output .= $previous_link . $page_link . $next_link;
        $output .= '</ul></div>';

        echo $output;
    }

    /**
     *  Fetch group
     */
    public function fetchSingleMemberRecord(){

        if(isset($_POST['memberId']) && isset($_POST['memberId'])!=''){

            $member_id = $_POST['memberId'];
            $memberInfo = Member::fetch($member_id);
            $num = count($memberInfo);
            $memberInfo['pg']=$_SESSION['x_page'];
            $memberInfo['qu']=$_SESSION['x_query'];
            $memberInfo['ty']=$_SESSION['x_type'];
            if($num>0){
                $response = $memberInfo;
            }else{
                $response['status']=200;
                $response['message']="No data found!";
            }
            echo json_encode($response);

        }
    }

    /**
     * Update group
     */
    public function updateSingleMemberRecord(){

        if(isset($_POST['id'])){

            $re = Member::update($_POST);
            if(!$re){
                echo 'Something went Wrong';
            }
            echo 'Basic Info Updated';

        }
    }


}
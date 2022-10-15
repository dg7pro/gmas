@extends('layouts.app')

@section('title', 'गरीबी मिटाओ अभियान संगठन')

{{--@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection--}}

@section('style')
    <style>
        .prabhari-form{
            background-color: #71c5fd;

            /*background-color: #feec80;*/
            -webkit-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
        }
    </style>
@endsection

@section('content')

    <div class="row justify-content-center mb-5">
        <h1 class="text-center display-5" style="color: #06283D">गरीबी मिटाओ अभियान संगठन</h1>
        <div class="col-md-7 mt-3">
            {{--<p class="text-muted text-center">गरीबी मिटाओ अभियान संगठन एक रजिस्टर्ड संगठन/ट्रस्ट है जिसके दो प्रमुख उद्देश्य है: पहला-भारतीय संविधान के मंशा के
                अनुसार सच्चे अर्थों में देश में समाजवादी व्यवस्था स्थापित करना तथा देश के गरीबों को गरीबी से मुक्ति दिलाने हेतु कार्य करना। तथा दूसरा-भ्रष्टाचार के खिलाफ आम जनता
                को जागरुक करना तथा भ्रष्टाचारियों के खिलाफ कानूनी कार्यवाही हेतु पहल करना। </p>
            <p class="text-muted text-center">भारत को स्थायी रुप से गरीबी मुक्त देश बनाने के लिए निम्नलिखित पांच कानून बनाना अनिवार्य है:
                १. देश में अनिवार्य रोजगार नीति | २. जनसंख्या नियंत्रण कानून | ३. कृषि को उद्योग का दर्जा प्रदान करना | ४. देश में अनिवार्य व समान शिक्षा नीति लागू करना |
                ५. सभी को स्वास्थ्य की निःशुल्क सुविधा मुहैया कराना |
            </p>
            <p class="text-muted text-center">यदि आप हमसे सहमत है तो नीचे दिए गए फॉर्म को भर कर हमारे सहयोगी सदस्य बने:</p>--}}
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5">
            @include('layouts.partials.flash')
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 prabhari-form ml-3 mr-3 rounded">

           {{-- <h3 class="text-muted text-center mt-2 mb-5">गरीबी मिटाओ अभियान संगठन से जुड़े </h3>--}}
            <h3 class="text-muted text-center mt-3 mb-4"> प्रभारी पंजीकरण </h3>

            <form action="{{'/join/prabhari'}}" method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="name">Full Name:<span id="msg-1" class="mt-1 ml-2" hidden> </span></label>
                    <div class="spinner-border spinner-border-sm text-info ml-2" id="spinner-1" hidden role="status"></div>
                    <input class="form-control" id="name" name="name" placeholder="आपका पूरा नाम" type="text" required
                           value="{{ isset($_GET['name']) ? $_GET['name'] : ''  }}">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile(10 digits):<span id="msg-3" class="mt-1 ml-2" hidden> </span></label>
                    <div class="spinner-border spinner-border-sm text-info ml-2" id="spinner-3" hidden role="status"></div>
                    <input class="form-control" id="mobile" name="mobile" placeholder="मोबाइल नंबर(10 अंक)" type="text" required
                           value="{{ isset($_GET['mobile']) ? $_GET['mobile'] : '' }}">
                </div>

                <div class="form-group">
                    <label for="whatsapp">Whatsaap(10 digits):<span id="msg-3" class="mt-1 ml-2" hidden> </span></label>
                    <div class="spinner-border spinner-border-sm text-info ml-2" id="spinner-3" hidden role="status"></div>
                    <input class="form-control" id="whatsapp" name="whatsapp" placeholder="व्हाट्सएप नंबर(10 अंक)" type="text"
                           value="{{ isset($_GET['whatsapp']) ? $_GET['whatsapp'] : '' }}">
                </div>

                <div class="form-group">
                    <label for="gender" class="mr-3 mt-2 mb-2">Gender:</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" class="custom-control-input" value="1"
                               {{ (isset($_GET['gender']) && $_GET['gender']==1) ? 'checked' : '' }} required>
                        <label class="custom-control-label" for="male">Male/पुरुष</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" class="custom-control-input" value="2"
                               {{ (isset($_GET['gender']) && $_GET['gender']==2) ? 'checked' : '' }} required>
                        <label class="custom-control-label" for="female">Female/महिला</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="state">State/राज्य</label>
                    <select id="state" name="state" class="form-control" required>
                        <option value="">अपना राज्य चुनें</option>
                        @foreach($states as $state)
                            <option value="{{$state->id}}">{{$state->text}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="district">Districts/जिला</label>
                    <select id="district" name="district" class="form-control" required>
                        <option value="">पहले राज्य का चयन करें</option>
                    </select>
                </div>
                {{--<div class="form-group">
                    <label for="location" class="mr-3 mt-2 mb-2">Location:</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="urban" name="location" class="custom-control-input" value="2"
                               {{ (isset($_GET['loc']) && $_GET['loc']==2) ? 'checked' : '' }} required>
                        <label class="custom-control-label" for="urban">Urban(शहरी)</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="rural" name="location" class="custom-control-input" value="1"
                               {{ (isset($_GET['loc']) && $_GET['loc']==1) ? 'checked' : '' }} required>
                        <label class="custom-control-label" for="rural">Rural(ग्रामीण)</label>
                    </div>
                </div>--}}

                <div class="form-group">
                    <label for="prabha" class="mr-3 mt-2 mb-2">Prabhari:</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="block-prabhari" name="prabha" class="custom-control-input" value="Block"
                               {{ (isset($_GET['prabha']) && $_GET['prabha']=="Block") ? 'checked' : '' }} required>
                        <label class="custom-control-label" for="block-prabhari">Block(खंड)</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="gram-prabhari" name="prabha" class="custom-control-input" value="Gram"
                               {{ (isset($_GET['prabha']) && $_GET['prabha']=="Gram") ? 'checked' : '' }} required>
                        <label class="custom-control-label" for="gram-prabhari">Gram</label>
                    </div>
                </div>

                <div id="blockDiv">
                    <div class="form-group">
                        <label for="block">Block/खंड</label>
                        <select id="block" name="block" class="form-control">
                            <option value="">पहले जिले का चयन करें</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="panchayat">Panchayat/खंड</label>
                        <input class="form-control" id="panchayat" name="panchayat" placeholder="आपका पूरा नाम" type="text"
                               value="{{ isset($_GET['panchayat']) ? $_GET['panchayat'] : ''  }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address/पता</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="घर का पता"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" disabled id="btn-join" name="join-submit">Submit/जमा करें</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-center mt-3 mb-2">
        <div class="col-md-2">
            <hr>
        </div>
    </div>

    <div class="row justify-content-center mx-1 mt-3 mb-5 text-muted">
        <a href="{{'/home/our-mission'}}"><b>Our Mission</b></a>
        <b class="mx-3">|</b>
        <a href="#" ><b>View Album</b></a>
    </div>




@endsection

@section('script')
    <script>
        $(document).ready(function(){

            // ==================================
            // Name validation
            // Validating user input name
            // ==================================
            $('#name').blur(function () {
                var name = $(this).val();
                $('#msg-1').attr('hidden',true);
                $('#spinner-1').attr('hidden',false);
                $.ajax({
                    url:"/ajax/checkName",
                    method:'POST',
                    data:{nm:name},
                    dataType:"json",
                    success:function (data) {
                        console.log(data);
                        if(data.n == 1){
                            $('#btn-join').attr('disabled',false);
                        }else{
                            $('#btn-join').attr('disabled',true);
                        }
                        setTimeout(function(){
                            $('#spinner-1').attr('hidden',true);
                            $('#msg-1').html(data.ht).attr('hidden',false);
                        }, 500);
                    }
                });
            });

            // ==================================
            // Mobile validation
            // Validating user input mobile
            // ==================================
            $('#mobile').blur(function () {
                var mobile = $(this).val();
                $('#msg-3').attr('hidden',true);
                $('#spinner-3').attr('hidden',false);
                $.ajax({
                    url:"/ajax/checkMobile",
                    method:'POST',
                    data:{mb:mobile},
                    dataType:"json",
                    success:function (data) {
                        console.log(data);
                        if(data.n == 1){
                            $('#btn-join').attr('disabled',false);
                        }else{
                            $('#btn-join').attr('disabled',true);
                        }
                        setTimeout(function(){
                            $('#spinner-3').attr('hidden',true);
                            $('#msg-3').html(data.ht).attr('hidden',false);
                        }, 500);
                    }
                });
            });
        });
    </script>

    <script>
        // ==================================
        // Getting Location
        // To toggle blocks select field
        // ==================================
        $(document).ready(function() {
            $("[name=location]").on('click', function () {
                var loc = $(this).val();
                console.log(loc);
                if(loc==1){
                    $('#blockDiv').show('slow');
                    $('#block').attr('required',false); // ^^^^^ this has to be true when all the block are complete
                    $('#panchayat').attr('required',false);
                    //$('#blockDiv').fadeIn();
                }
                else{
                    $('#blockDiv').hide('slow');
                    $('#block').attr('required',false);
                    $('#panchayat').attr('required',false);
                    //$('#blockDiv').fadeOut();
                }
            });
        });

        /*$(document).ready(function() {
            $("[name=location]").on('click', function () {
                var loc = $(this).val();
                console.log(loc);
                if(loc==1){
                    $('#blockDiv').attr('hidden',false);
                    $('#blockDiv').show('slow');
                    //$('#blockDiv').fadeIn();
                }
                else{
                    $('#blockDiv').hide('slow');
                    $('#blockDiv').attr('hidden',true);
                    //$('#blockDiv').fadeOut();
                }
            });
        });*/
    </script>

    <script>
        // ==================================
        // Populating District
        // Based on specific state
        // ==================================
        $(document).ready(function(){
            $('#state').on('change', function(){
                var stateID = $(this).val();
                if(stateID){
                    $.ajax({
                        type:'POST',
                        url:'/ajax/selectDistrict',
                        data:{
                            state_id:stateID
                        },
                        success:function(data,status){
                            //console.log(data);
                            //console.log(status);
                            $('#district').html(data);
                        }
                    });
                }else{
                    $('#district').html('<option value="">Select state first</option>');
                }
            });
        });

        // ==================================
        // Populating Blocks
        // Based on specific district
        // ==================================
        $(document).ready(function(){
            $('#district').on('change', function(){
                var districtID = $(this).val();
                if(districtID){
                    $.ajax({
                        type:'POST',
                        url:'/ajax/selectBlock',
                        data:{
                            district_id:districtID
                        },
                        success:function(data,status){
                            //console.log(data);
                            //console.log(status);
                            $('#block').html(data);
                        }
                    });
                }else{
                    $('#block').html('<option value="">Select district first</option>');
                }
            });
        });
    </script>

@endsection


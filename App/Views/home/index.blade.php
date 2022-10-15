@extends('layouts.app')

@section('title', 'गरीबी मिटाओ अभियान संगठन')

{{--@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection--}}

@section('style')
    <style>
        .my-form{
            background-color: #feec80;
            -webkit-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
        }
    </style>
@endsection

@section('content')

    <div class="row justify-content-center mb-5">
        <h1 class="text-center text-warning display-5">गरीबी मिटाओ अभियान संगठन</h1>
        <div class="col-md-7 mt-3">
            <p class="text-muted text-center">गरीबी मिटाओ अभियान संगठन एक रजिस्टर्ड संगठन/ट्रस्ट है जिसके दो प्रमुख उद्देश्य है: पहला-भारतीय संविधान के मंशा के
                अनुसार सच्चे अर्थों में देश में समाजवादी व्यवस्था स्थापित करना तथा देश के गरीबों को गरीबी से मुक्ति दिलाने हेतु कार्य करना। दूसरा-भ्रष्टाचार के खिलाफ आम जनता
                को जागरुक करना तथा भ्रष्टाचारियों के खिलाफ कानूनी कार्यवाही हेतु पहल करना। </p>
            <p class="text-muted text-center">भारत को स्थायी रुप से गरीबी मुक्त देश बनाने के लिए निम्नलिखित पांच कानून बनाना अनिवार्य है:
                १. देश में अनिवार्य रोजगार नीति | २. जनसंख्या नियंत्रण कानून | ३. कृषि को उद्योग का दर्जा प्रदान कराना | ४. देश में अनिवार्य व समान शिक्षा नीति लागू करना |
                ५. सभी को स्वास्थ्य की निःशुल्क सुविधा मुहैया कराना |
            </p>
            <p class="text-muted text-center">यदि आप हमसे सहमत है तो नीचे दिए गए फॉर्म को भर कर हमारे सहयोगी सदस्य बने:</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5">
            @include('layouts.partials.flash')
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 my-form ml-3 mr-3 rounded">

            <h3 class="text-muted text-center mt-2 mb-5">गरीबी मिटाओ अभियान संगठन से जुड़े </h3>

            <form action="{{'/join/satya'}}" method="POST" autocomplete="off">
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
                <div class="form-group">
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

                </div>
                <div class="form-group" id="blockDiv">
                    <label for="block">Block/खंड</label>
                    <select id="block" name="block" class="form-control">
                        <option value="">पहले जिले का चयन करें</option>
                    </select>
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
        <a href="{{'home/our-mission'}}"><b>Our Mission</b></a>
        <b class="mx-3">|</b>
        <a href="#" onclick="showAlbum()"><b>View Album</b></a>
    </div>

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
             It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides.
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>

    @php
        $p1 = "pics/image1.jpg";
        $p2 = "pics/image2.jpg";
        $p3 = "pics/image3.jpg";
        $p4 = "pics/image4.jpg";
        $p5 = "pics/image5.jpg";
        $p6 = "pics/image6.jpg";
        $p7 = "pics/image7.jpg";
        $p8 = "pics/image8.jpg";

    @endphp

    {{--<div class="row justify-content-center mb-5">
        <span style="font-size: 36px; color: darkred;">
            <i class="fab fa-youtube mr-5"></i>
        </span>
        <span style="font-size: 36px; color: #82C91E">
            <i class="fab fa-whatsapp-square mr-5"></i>
        </span>
        <span style="font-size: 36px; color: Mediumslateblue;">
            <i class="fas fa-camera"></i>
        </span>
    </div>--}}

@endsection

@section('pswipe')
    <!-- Core JS file -->
    <script src="dist/photoswipe.min.js"></script>
    <!-- UI JS file -->
    <script src="dist/photoswipe-ui-default.min.js"></script>

    <script type="text/javascript">
        function showAlbum() {
            var pswpElement = document.querySelectorAll('.pswp')[0];
            // build items array
            var items = [
                {
                    src: '{{$p1}}',
                    w: 600,
                    h: 400
                },
                {
                    src: '{{$p2}}',
                    w: 1200,
                    h: 900
                },
                {
                    src: '{{$p3}}',
                    w: 1200,
                    h: 900
                },
                {
                    src: '{{$p4}}',
                    w: 1200,
                    h: 900
                },
                {
                    src: '{{$p5}}',
                    w: 1200,
                    h: 900
                },
                {
                    src: '{{$p6}}',
                    w: 1200,
                    h: 900
                },
                {
                    src: '{{$p7}}',
                    w: 1200,
                    h: 900
                },
                {
                    src: '{{$p8}}',
                    w: 1200,
                    h: 900
                }
            ];
            // define options (if needed)
            var options = {
                // optionName: 'option value'
                // for example:
                index: 0 // start at first slide
            };
            // Initializes and opens PhotoSwipe
            var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();

        }
    </script>
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
                    //$('#blockDiv').fadeIn();
                }
                else{
                    $('#blockDiv').hide('slow');
                    $('#block').attr('required',false);
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


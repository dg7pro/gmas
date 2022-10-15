@extends('layouts.app')

@section('title', 'Page Title')

{{--@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection--}}

@section('content')

    <div class="row justify-content-center mb-5">
        <h3 class="text-muted">Register/Signup</h3>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-md-4">

            @include('layouts.partials.alert')

            <form action="{{'/register/create'}}" method="POST">

                {{--<input type="hidden" name="csrf_token" value="{{$csrf_token}}">--}}

                <div class="form-group">
                    <label for="uid">Name:
                        <img src="/images/ring.svg" id="spinner-nm" hidden>
                        <span id="msg-nm" class="mt-1 ml-2"> </span>
                    </label>
                    <!-- uid stands for unique identity -->
                    <input class="form-control" id="naam" name="uid" placeholder="Your name" type="text" required
                           value="{{ isset($_GET['uid']) ? $_GET['uid'] : '' }}">
                </div>

                <div class="form-group">
                    <label for="uid">Mobile:
                        <img src="/images/ring.svg" id="spinner-3" hidden>
                        <span id="msg-3" class="mt-1 ml-2"> </span>
                    </label>
                    <!-- uid stands for unique identity -->
                    <input class="form-control" id="mobile" name="mobile" placeholder="Mobile no.(10 digits)" type="text"
                           value="{{ isset($arr['mobile']) ? $arr['mobile'] : '' }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:
                        <img src="/images/ring.svg" id="spinner-em" hidden>
                        <span id="msg-em" class="mt-1 ml-2"> </span>
                    </label>
                    <!-- uid stands for unique identity -->
                    <input class="form-control" id="email" name="email" placeholder="Your Email" type="text"
                           value="{{ isset($_GET['email']) ? $_GET['email'] : '' }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:
                        <img src="/images/ring.svg" id="spinner-pw" hidden>
                        <span id="msg-pw" class="mt-1 ml-2"> </span>
                    </label>
                    <input class="form-control" id="password" name="password" placeholder="Password..." type="password"
                           value="" required>
                </div>

                <div class="form-group">
                    <label for="i_agree">
                        <input type="checkbox" id="i_agree" name="i_agree" required
                               onchange="document.getElementById('btn-signup').disabled = !this.checked;">
                        &nbsp;I Agree
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="login-submit">Register</button>
                    <a href="{{'login'}}" class="btn btn-light"> or Login</a>
                </div>

            </form>
        </div>
    </div>

@endsection

@section('script')

    <script>

        $(document).ready(function(){


            // ==================================
            // Name validation
            // Validating user input name
            // ==================================
            $('#naam').blur(function () {
                var nm = $(this).val();
                $('#msg-nm').attr('hidden',true);
                $('#spinner-nm').attr('hidden',false);
                $.ajax({
                    url:"/Ajax/check-name",
                    method:'POST',
                    data:{nm:nm},
                    dataType:"json",
                    success:function (data) {
                        console.log(data);
                        if(data.n == 1){
                            $('#btn-join').attr('disabled',false);
                        }else{
                            $('#btn-join').attr('disabled',true);
                        }
                        setTimeout(function(){
                            $('#spinner-nm').attr('hidden',true);
                            $('#msg-nm').html(data.ht).attr('hidden',false);
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
                    url:"/Ajax/check-mobile",
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

            // ==================================
            // Email validation
            // Validating user input email
            // ==================================
            $('#email').blur(function () {
                var email = $(this).val();
                $('#msg-em').attr('hidden',true);
                $('#spinner-em').attr('hidden',false);
                $.ajax({
                    url:"/Ajax/check-email",
                    method:'POST',
                    data:{em:email},
                    dataType:"json",
                    success:function (data) {
                        console.log(data);
                        if(data.n == 1){
                            //$('#btn-signup').attr('disabled',false);

                        }else{
                            //$('#btn-signup').attr('disabled',true);

                        }
                        setTimeout(function(){
                            $('#spinner-em').attr('hidden',true);
                            $('#msg-em').html(data.ht).attr('hidden',false);
                        }, 500);
                    }
                });
            });

            // ==================================
            // Password validation
            // Validating user input email
            // ==================================
            $('#password').blur(function () {
                var pw = $(this).val();
                $('#msg-pw').attr('hidden',true);
                $('#spinner-pw').attr('hidden',false);
                $.ajax({
                    url:"/Ajax/check-password",
                    method:'POST',
                    data:{pw:pw},
                    dataType:"json",
                    success:function (data) {
                        console.log(data);
                        if(data.n == 1){
                            //$('#btn-signup').attr('disabled',false);

                        }else{
                            //$('#btn-signup').attr('disabled',true);

                        }
                        setTimeout(function(){
                            $('#spinner-pw').attr('hidden',true);
                            $('#msg-pw').html(data.ht).attr('hidden',false);
                        }, 500);
                    }
                });
            });

        });
    </script>

@endsection
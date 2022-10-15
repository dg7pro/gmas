<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">

    <!-- Core CSS file -->
    <link rel="stylesheet" href="/dist/photoswipe.css">
    <!-- Skin CSS file (styling of UI - buttons, caption, etc.)
     In the folder of skin CSS file there are also:
     - .png and .svg icons sprite,
     - preloader.gif (for browsers that do not support CSS animations) -->
    <link rel="stylesheet" href="/dist/default-skin/default-skin.css">

    @yield('style')

    <!-- Google Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>@yield('title')</title>
</head>
<body>
@include('layouts.partials.nav')
<div class="container mt-5">
    @yield('content')
</div>

<!-- Optional JavaScript -->
@yield('pswipe')

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
{{--<script src="https://kit.fontawesome.com/99f9add9fb.js" crossorigin="anonymous"></script>--}}


<script src="{{'/js/initial.min.js'}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.initialjs').initial({
            width:40,
            height:40,
            name: 'Name', 						// Name of the user
            charCount: 1, 						// Number of characherts to be shown in the picture.
            textColor: '#ffffff', 				// Color of the text
            seed: 0, 							// randomize background color
            fontSize: 24,
            fontWeight: 400,
            fontFamily: 'HelveticaNeue-Light,Helvetica Neue Light,Helvetica Neue,Helvetica, Arial,Lucida Grande, sans-serif',
            radius: 0
        });
    })
</script>


<!-- Optional JavaScript -->
@yield('script')
<script>
    //================================
    // Logout Process through
    // Ajax Request
    //================================
    $(document).ready(function(){
        $('#logoutClk').on('click',function () {
            $.ajax({
                url:"w-ajax/logout.php",
                method:'post',
                data:{},
                dataType:"text",
                success:function (data, status) {
                    console.log(data);
                    console.log(status);
                    window.location.href = "index.php";
                }
            });
        });
    });

    $(document).ready(function () {
        $('.alert').on('close.bs.alert', function () {
            $.ajax({
                url:"w-ajax/unset-session.php",
                method:'POST',
                dataType:"text",
                success:function (data,status) {
                    console.log(status)
                }
            });
        });
    })
</script>

</body>
</html>

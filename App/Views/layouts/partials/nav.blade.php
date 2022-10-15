<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{'/'}}">
            {{--<img src="public/images/bootstrap-solid.svg" width="30" height="30" alt="">--}}
            <b class="text-warning">GmasIndia.org</b>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{'/home/about-us'}}">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link font-weight-bold" href="{{'/home/our-mission'}}">Our Mission<span class="sr-only">(current)</span></a>
                </li>
               {{-- <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{'/home/contact-us'}}">Contact<span class="sr-only">(current)</span></a>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{'/home/prabhari-registration'}}">Prabhari<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Social
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{'https://www.facebook.com/gmasindia/'}}">Like Facebook</a>
                        {{--<a class="dropdown-item" href="#">Twitter</a>--}}
                        <a class="dropdown-item" href="#"><img src="{{'/images/whatsapp.png'}}" width="16px" alt="">+91 9102787075</a>
                    </div>
                </li>

            </ul>


            @if($authUser)
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2">{{$authUser->name}}</span>
                            <img data-name="{{$authUser->name}}" width="35" height="35" class="rounded-circle initialjs">

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                           {{-- <a class="dropdown-item" href="#">{{'Account'}}</a>
                            <div class="dropdown-divider"></div>--}}
                            {{--<a class="dropdown-item" href="{{'/account/welcome'}}">Dashboard</a>
                            <a class="dropdown-item" href="{{'/account/edit-profile'}}">Edit Profile</a>
                            <div class="dropdown-divider"></div>--}}
                            <a class="dropdown-item" href="{{'/account/logout'}}">Log Out</a>
                            @if($authUser->is_admin)
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{'/admin/index'}}">Admin Area</a>
                            @endif
                        </div>
                    </li>
                </ul>
            @else
                {{--<a role="button" href="{{'/signup'}}" class="btn btn-outline-info my-2 my-sm-0 mr-2">Register</a>--}}
                <a role="button" href="{{'/login'}}" class="btn btn-outline-success my-2 my-sm-0">Login</a>
            @endif
        </div>
    </nav>
</div>
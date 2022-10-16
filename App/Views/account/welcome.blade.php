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
        <div class="col-md-7 mt-3 text-center">

                <h3 style="color: #06283D">Welcome {{$authUser->name}}</h3>
                <a role="button" class="btn btn-success mt-5" href="{{'/admin'}}">Admin Dashboard</a>



        </div>
    </div>






@endsection

@section('script')


@endsection


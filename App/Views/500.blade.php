@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <h1>An error occurred 500</h1>
        <p>Sorry, an error has occurred.</p>

        <p>Go to home page to start fresh:</p>
        <a role="button" class="btn btn-success btn-sm" href="{{'/admin'}}">Home Page</a>


    </div>

@endsection
@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <h1>Page not found 404</h1>
        <p>Sorry, that page doesn't exist.</p>

        <p>Go to home page to start fresh:</p>
        <a role="button" class="btn btn-success btn-sm" href="{{'/admin'}}">Home Page</a>

    </div>

@endsection
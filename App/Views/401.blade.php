@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <h1>Un-authorized Access 401</h1>

        <p>You are not authorized to view this page.</p>

        <p>If you are admin please click on refresh button:</p>

        @if($authUser->is_admin)
            <a role="button" class="btn btn-success btn-sm" href="{{'/admin'}}">Refresh</a>
        @endif



    </div>

@endsection
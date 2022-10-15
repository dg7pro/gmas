@extends('layouts.app')

@section('custom_css')
    <style>
        .my-coral{
            background-color: coral;
        }
    </style>
@endsection

@section('content')

    <div class="container">

        <div class="row mt-3">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-info">
                        <li class="breadcrumb-item"><a href="{{'/'}}">GMAS</a></li>
                        <li class="breadcrumb-item"><a href="{{'/admin/index'}}">Admin Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Members</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="mt-3 mb-3">
            <div class="form-group">
                <input type="text" id="search_box" name="search_box" class="form-control"
                       placeholder="Type your search query here...">
            </div>
            <div class="table-responsive" id="dynamic_content"></div>
        </div>

        {{--<div class="card mt-3 mb-3">
            <div class="card-header">
                Search User
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="text" id="search_box" name="search_box" class="form-control"
                           placeholder="Type your search query here...">
                </div>
                <div class="table-responsive" id="dynamic_content"></div>
            </div>
        </div>--}}

    </div>
@endsection

@section('script')

    <script>
        $(document).ready(function (){

            load_data(1);

            function load_data(page, query=''){
                $.ajax({
                    url: "/Adjax/search-members",
                    method: "POST",
                    data:{
                        page:page,
                        query:query
                    },
                    success:function(data){
                        $('#dynamic_content').html(data);
                    }
                })
            }

            $(document).on('click', '.page-link', function(){
                var page = $(this).data('page_number');
                var query = $('#search_box').val();
                load_data(page, query);
            });

            $('#search_box').keyup(function(){
                var query = $('#search_box').val();
                load_data(1, query);
            });

        })

    </script>

@endsection


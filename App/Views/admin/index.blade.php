@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="mt-3 mb-5 text-info text-secondary">Admin Dashboard</h1>

        <div class="row">
            <div class="col-sm-4  mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Members List</h5>
                        <p class="card-text">Complete List and Edit of Members on this portal</p>
                        <a href="{{'/admin/list-members'}}" class="btn btn-danger">Type-A Members</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4  mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Search Prabhari</h5>
                        <p class="card-text">Manage members area wise state, district, block, ward etc</p>
                        <a href="{{'/admin/search-prabhari'}}" class="btn btn-info">View prabhari</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4  mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Search members</h5>
                        <p class="card-text">Manage members area wise state, district, block, ward etc</p>
                        <a href="{{'/admin/search-members'}}" class="btn btn-success">View members</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4  mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Registered Users</h5>
                        <p class="card-text">Manage and enlist all registered users of this portal.</p>
                        <a href="{{'/admin/list-users'}}" class="btn btn-warning">Type-B Users</a>
                    </div>
                </div>
            </div>




            <div class="col-sm-4  mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Wards management</h5>
                        <p class="card-text">View add and edit district wise Ward list</p>
                        <a href="#" class="btn btn-primary">Mange Wards</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4  mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Blocks management</h5>
                        <p class="card-text">View add and edit district wise Block list</p>
                        <a href="#" class="btn btn-dark">Manage Blocks</a>
                    </div>
                </div>
            </div>
        </div>


        {{--<div class="card mt-5 mb-3">
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

@endsection
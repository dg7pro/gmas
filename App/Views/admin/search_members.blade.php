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
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="card mt-3 mb-3">
            <div class="card-header">
                Search User
            </div>
            <div class="card-body">
                {{--<div class="form-group">
                    <input type="text" id="search_box" name="search_box" class="form-control"
                           placeholder="Type your search query here...">
                </div>--}}

                <div class="bg-light text-center p-2">
                    <form class="form-inline">
                    {{--<label class="sr-only" for="inlineFormInputName2">Name</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">--}}

                    <label class="sr-only" for="state">Preference</label>
                    <select class="custom-select my-2 mr-sm-2 md-4" id="state" name="state">
                        <option selected value="">Select State</option>
                        @foreach($states as $state)
                            <option value="{{$state->id}}">{{$state->text}}</option>
                        @endforeach
                    </select>


                    <label class="sr-only" for="district">Preference</label>
                    <select class="custom-select my-2 mr-sm-2 md-4" id="district" name="district" >
                        <option selected value="">Select District</option>

                    </select>

                        <label class="sr-only" for="block">Preference</label>
                        <select class="custom-select my-2 mr-sm-2 md-4" id="block" name="block">
                            <option selected value="">Select Block</option>

                        </select>

                    <a type="button" class="btn btn-danger my-2 md-4 refresh" id="refresh" href="javascript:void(0)"> Refresh</a>
                </form>
                </div>
                <div class="table-responsive" id="dynamic_content"></div>
            </div>
        </div>

        <!-- Update Member Info Modal -->
        <div class="modal fade" id="modal-member" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Group Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="page-no">
                        <input type="hidden" id="query-item">
                        <input type="hidden" id="query-type">

                        <div class="form-group">
                            <label for="member-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="member-name">
                        </div>

                        <div class="form-group form-row">
                            <div class="col">
                                <label for="member-gender" class="col-form-label">Gender:</label>
                                <select class="form-control" id="member-gender">
                                    <option value="">Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="member-dob" class="col-form-label">Date of Birth:</label>
                                <input type="date" class="form-control" id="member-dob">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <div class="col">
                                <label for="member-mobile" class="col-form-label">Mobile:</label>
                                <input type="text" class="form-control" id="member-mobile">
                            </div>
                            <div class="col">
                                <label for="member-whatsapp" class="col-form-label">Whatsapp:</label>
                                <input type="text" class="form-control" id="member-whatsapp">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="member-email" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="member-email">
                        </div>

                        <div class="form-group form-row">
                            <div class="col">
                                <label for="member-state">State:</label>
                                <select class="form-control" id="member-state" disabled>
                                    <option value="">Select State</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->text}}</option>
                                    @endforeach
                                </select>
                            </div>

                           {{-- <div class="col">
                                <label for="member-district">District:</label>
                                <select class="form-control" id="member-district" disabled>
                                    <option value="">Select District</option>
                                </select>
                            </div>--}}

                            <div class="col">
                                <label for="member-district" >District:</label>
                                <input type="text" class="form-control" id="member-district" disabled>
                                <input type="hidden" id="member-district-id">
                            </div>



                        </div>

                         <div class="form-group">
                            <label for="member-addr" class="col-form-label">Address:</label>
                            <textarea class="form-control" id="member-addr"></textarea>
                        </div>

                        <div class="form-group form-row">
                            <div class="col">
                                <label for="member-location">Location:</label>
                                <select class="form-control" id="member-location" disabled>
                                    <option value="">Select Location</option>
                                    <option value=1>Rural</option>
                                    <option value=2>Urban</option>
                                </select>
                            </div>

                            {{--<div class="col">
                                <label for="member-block">Block:</label>
                                <select class="form-control" id="member-block">
                                    <option value="">Select Block</option>
                                </select>
                            </div>--}}

                            <div class="col">
                                <label for="member-block" >Block:</label>
                                <input type="text" class="form-control" id="member-block" disabled>
                            </div>
                            <input type="hidden" id="member-block-id">
                        </div>

                        <div class="bg-light mt-4 mb-2 py-1 text-center text-info">{ Admin Section }</div>

                        <div class="form-group form-row">
                            <div class="col">
                                <label for="prabhari">Make Prabhari:</label>
                                <select class="form-control" name="prabhari" id="prabhari">
                                    <option value="None">None</option>
                                    <option value="Block">Block Prabhari</option>
                                    <option value="Gram">Gram Prabhari</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" id="panchayatDiv">
                            <label for="panchayat" class="col-form-label">Name of Gram/Panchayat:</label>
                            <input type="text" class="form-control" id="panchayat">
                        </div>

                        <div class="form-group form-row">
                            <div class="col">
                                <label for="verified">Verification:</label>
                                <select class="form-control" id="verified">
                                    <option value=0>Not Verified</option>
                                    <option value=1>Verified</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="important">Important:</label>
                                <select class="form-control" id="important">
                                    <option value=0>Simple Member</option>
                                    <option value=1>Important</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="updateMemberInfo()">Update member</button>
                        <input type="hidden" name="" id="member-id">

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')

    <script>

        function load_data(page, query='', type=''){
            $.ajax({
                url: "/Adjax/block-members",
                method: "POST",
                data:{
                    page:page,
                    query:query,
                    type:type
                },
                success:function(data){
                    $('#dynamic_content').html(data);
                }
            })
        }

        $(document).ready(function (){

            load_data(1);

            $(document).on('click', '.page-link', function(){

                var page = $(this).data('page_number');
                //var query = $('#block').val();

                var b = $('#block').val();
                var d = $('#district').val()
                var s = $('#state').val();
                var query = (b!==''?b:(d!==''?d:(s!==''?s:'')));
                var type = (b!==''? 'b':(d!==''? 'd':(s!==''? 's' :'')));

                load_data(page, query, type);
            });

            $(document).on('click', '#refresh', function(){

                //var query = $('#block').val();
                //console.log(query);

                var b = $('#block').val();
                var d = $('#district').val()
                var s = $('#state').val();
                var query = (b!==''?b:(d!==''?d:(s!==''?s:'')));
                var type = (b!==''? 'b':(d!==''? 'd':(s!==''? 's' :'')));

                load_data(1, query, type);
            });

        })

    </script>


    <script>

        function getMemberInfo(id){
            console.log(id);
            $('#member_id').val(id);
            $.post("/adjax/fetchSingleMemberRecord",{memberId:id},function (data, status) {

                console.log(data);
                var mem = JSON.parse(data);

                // Kept for reference
                /*$.ajax({
                    type:'POST',
                    url:'/ajax/selectDistrict',
                    data:{
                        state_id:mem.state_id
                    },
                    success:function(data,status){
                        $('#member-district').html(data);
                        $('#member-district').val(mem.district_id);
                    }
                });*/

                $('#page-no').val(mem.pg);
                $('#query-item').val(mem.qu);
                $('#query-type').val(mem.ty);

                $('#member-mobile').val(mem.mobile);
                $('#member-whatsapp').val(mem.whatsapp);
                $('#member-email').val(mem.email);
                $('#member-state').val(mem.state_id);
                $('#member-district-id').val(mem.district_id);
                $('#member-district').val(mem.district_name);
                $('#member-addr').val(mem.address);
                $('#member-location').val(mem.location);
                $('#member-block-id').val(mem.block_id);
                if(mem.location==2){
                    $('#member-block').val("Not Applicable");
                }else{
                    $('#member-block').val(mem.block_name);
                }
                $('#prabhari').val(mem.prabhari);
                $('#panchayat').val(mem.panchayat);
                $('#verified').val(mem.is_verified);
                $('#important').val(mem.is_important);
                $('#member-name').val(mem.name);
                $('#member-gender').val(mem.gender);
                $('#member-dob').val(mem.dob);
                $('#member-id').val(mem.id);

            });
            $('#modal-member').modal("show");
        }

        function updateMemberInfo(){

            var pg = $('#page-no').val();
            var qu = $('#query-item').val();
            var ty = $('#query-type').val();

            var name = $('#member-name').val();
            var gender = $('#member-gender').val();
            var dob = $('#member-dob').val();
            var mobile = $('#member-mobile').val();
            var whatsapp = $('#member-whatsapp').val();
            var email = $('#member-email').val();
            var state = $('#member-state').val();
            var district = $('#member-district-id').val();
            var addr = $('#member-addr').val();
            var location = $('#member-location').val();
            var block = $('#member-block-id').val();
            var prabhari = $('#prabhari').val();
            var panchayat = $('#panchayat').val();
            var verified = $('#verified').val();
            var important = $('#important').val();

            var id = $('#member-id').val();
            $.post("/adjax/updateSingleMemberRecord",{
                name:name,
                gender:gender,
                dob:dob,
                mobile:mobile,
                whatsapp:whatsapp,
                email:email,
                state:state,
                district:district,
                addr:addr,
                location:location,
                block:block,
                prabhari:prabhari,
                panchayat:panchayat,
                verified:verified,
                important:important,
                id:id

            },function (data, status) {
                console.log(data);
                $('#modal-member').modal("hide");
                //load_data(1);
                load_data(pg,qu,ty);

            });
        }

        /*$(document).ready(function() {
            $("[name=prabhari]").on('click', function () {
                var loc = $(this).val();
                console.log(loc);
                if(loc=="Block"){
                    $('#panchayatDiv').hide('slow');
                    $('#panchayat').attr('required',false);
                }
                else{
                    $('#panchayatDiv').show('slow');
                    $('#panchayat').attr('required',false);
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
                            $('#block').html('<option value="">Select Block</option>');
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

        /*$(document).ready(function(){
            $('#block').on('change', function(){
                var blc= $(this).val();
                if(blc!==''){
                    $('.refresh').removeClass('disabled');
                }else{
                    $('.refresh').addClass('disabled');
                }
            });
        });*/

    </script>


@endsection


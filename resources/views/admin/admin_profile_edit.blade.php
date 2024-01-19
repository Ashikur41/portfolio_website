@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Profile Page</h4>
                            <form action="{{ route('store.profile') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="name" type="text" id="name"
                                        value="{{ $editData->name }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">User Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="text" id="email"
                                        value="{{ $editData->email }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="username" class="col-sm-2 col-form-label">User Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="username" type="text" id="username"
                                        value="{{ $editData->username }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label">Profile Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="profile_image" type="file" id="image"
                                        value="#">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" id="showimage" src="{{ (!empty($editData->profile_image)) ? url('upload/admin_image/'.$editData->profile_image)
                                        :url('upload/No-image-found.jpg') }}" alt="Card image cap">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Frofile">
                                <!-- end row -->
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload=function(e){
                    $('#showimage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

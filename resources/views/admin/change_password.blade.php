@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Change Password Page</h4><br><br>

                            @if (count($errors))

                            @foreach ($errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show">{{ $error }}</p>
                                
                            @endforeach
                                
                            @endif

                            <form action="{{ route('update.password') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Old Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="oldpassword" type="password" id="oldpassword"
                                        value="#">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="newpassword" type="password" id="newpassword"
                                        value="#">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="confrimpassword" type="password" id="confrimpassword"
                                        value="#">
                                    </div>
                                </div><br>

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Password">
                                <!-- end row -->
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection

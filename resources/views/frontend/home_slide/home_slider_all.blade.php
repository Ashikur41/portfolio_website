@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Home Slider Page</h4><br><br>
                            <form action="{{ route('update.slider',$homeskider->id) }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $homeskider->id }}">
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="title" type="text" id="title"
                                        value="{{ $homeskider->title }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="short_title" class="col-sm-2 col-form-label">Short Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="short_title" type="text" id="short_title"
                                        value="{{ $homeskider->short_title }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="video_url" class="col-sm-2 col-form-label">Video URL</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="video_url" type="text" id="video_url"
                                        value="{{ $homeskider->video_url }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="home_slide" class="col-sm-2 col-form-label">Slider Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="home_slide" type="file" id="image"
                                        value="#">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" id="showimage" src="{{ (!empty($homeskider->home_slide))? url(''.$homeskider->home_slide)
                                        :url('upload/no_image.jpg') }}" alt="Card image cap">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slide">
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

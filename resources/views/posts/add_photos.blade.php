@extends('layouts.layout')

@section('contents')

    <div class="page animsition">
        <div class="page-header">
            <h1 class="page-title">Add New Post</h1>
        </div>

        <div class="page-content">
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="col-sm-9">


                        <!-- New Post Panel -->
                        @if($errors->has())
                            <div class="alert alert-danger" role="alert">
                                @foreach($errors->all() as $error)
                                    {{$error}} <br>
                                @endforeach
                            </div>
                        @endif

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form action="/post/upload_photos" method="POST" class="form-horizontal"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                                    <!-- Post Name -->

                            {{--<!--Image-->--}}
                            <div class="form-group">
                                <label for="post-photo" class="col-sm-3 control-label">Post Image</label>

                                <div class="col-sm-9">
                                    <div class="input-group">
                                            <span class="input-group-btn">
                                              <span class="btn btn-outline btn-default btn-file">
                                                <i class=""></i><input type="file" name="image" required
                                                                       accept="image/*"/>
                                              </span>
                                            </span>
                                    </div>
                                    <span class="help-block"><i>Image size should be 1200 x 900px</i></span>
                                </div>
                            </div>


                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-btn fa-plus"></i>&nbsp;Add photos
                                    </button>
                                </div>
                            </div>

                        </form>
                        <!-- End Example Basic Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
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


                        <form action="/post/create" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                                    <!-- Post Name -->
                            <div class="form-group">
                                <label for="post-name" class="col-sm-3 control-label">Post</label>

                                <div class="col-sm-9">
                                    <input type="text" name="post_name" id="post-name" class="form-control" required value="{{ old('post') }}">
                                </div>
                            </div>
                            <!--Post txt-->
                            <div class="form-group">
                                <label for="post-name" class="col-sm-3 control-label">Content</label>

                                <div class="col-xs-9">
                                        <textarea name="post_content" id="post-txt" class="form-control" rows="10" required></textarea>
                                </div>
                            </div>
                            <!--Image-->
                            <div class="form-group">
                                <label for="post-photo" class="col-sm-3 control-label">Post Image</label>

                                <div class="col-sm-9">
                                    <div class="input-group">
                                            <span class="input-group-btn">
                                              <span class="btn btn-outline btn-default btn-file">
                                                <i class=""></i><input type="file" name="image" required accept="image/*"/>
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
                                        <i class="fa fa-btn fa-plus"></i>&nbsp;Add Post
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
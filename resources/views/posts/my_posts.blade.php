@extends('layouts.layout')

@section('contents')
    <div class="page bg-white animsition">
        <!-- Forum Content -->
        <div class="page-main">

            <!-- Forum Content Header -->
            <div class="page-header">
                <h1>Your Posts</h1>
            </div>


            <!-- Current Tasks -->
            @if (count($posts) > 0)


                <div class="page-content tab-content page-content-table nav-tabs-animate">

                    <div class="tab-pane animation-fade active" id="forum-newest" role="tabpanel">

                        @foreach ($posts as $post)
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class="title">
                                            <h3>{{$post->post_name}}</h3>
                                        </div>
                                        <div class="metas">
                                            <span class="author">By you</span>
                                            <span class="started">Created at {{$post->created_at}}</span>
                                        </div>
                                    </div>

                                    @if($post->user_id==Auth::id())

                                        <div class="col-xs-2">
                                            <div class="row">
                                                <span>

                                                    <br>

                                                </span>


                                            </div>
                                            <a href="{{url('/post/'.$post->id)}}"
                                               class="btn btn-outline btn-info btn-sm">View</a>

                                            <form action="/post/{{ $post->id }}" method="POST">
                                                {!!csrf_field()!!}
                                                {!! method_field('DELETE') !!}
                                                <button type="submit" id="delete-post-{{ $post->id }}"
                                                        class="btn btn-outline btn-danger btn-sm">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>

                                        </div>
                                    @endif
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>


    <!-- Add Topic button -->
    <button class="site-action btn-raised btn btn-success btn-floating" data-target="#addTopicForm"
            data-toggle="modal" type="button">
        <i class="icon wb-pencil" aria-hidden="true"></i>
    </button>
    <!-- Add Topic Form -->
    <div class="modal fade" id="addTopicForm" aria-hidden="true" aria-labelledby="addTopicForm"
         role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Create New Topic</h4>
                </div>
                <div class="modal-body container-fluid">
                    <form action="/post/create" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="post-name" class="col-sm-3 control-label">Post</label>

                            <div class="col-sm-6">
                                <input type="text" name="post_name" id="post-name" class="form-control"
                                       value="{{ old('post') }}">
                            </div>
                        </div>
                        <!--Task txt-->
                        <div class="form-group">
                            <label for="post-name" class="col-sm-3 control-label">Content</label>

                            <div class="col-sm-6">
                                <textarea name="post_content" id="post-txt" class="form-control" rows="10"></textarea>
                            </div>
                        </div>


                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer text-left">

                    <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add Topic Form -->
@endsection
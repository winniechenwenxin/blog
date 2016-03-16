@extends('layouts.layout')

@section('contents')
    <div class="page animsition">
        <div class="page-header page-header-bordered">
            <h1 class="page-title">My Post</h1>
        </div>


        <div class="page-content">
            <div class="panel">
                <div class="panel-body">
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

                                                <div class="col-xs-4">

                                                    <form action="/post/{{ $post->id }}" method="POST"
                                                          class="form-inline">
                                                        {!!csrf_field()!!}
                                                        {!! method_field('DELETE') !!}

                                                        <a href="{{url('/post/'.$post->id)}}"
                                                           class="btn btn-outline btn-info ">View</a>

                                                        <button type="submit" id="delete-post-{{ $post->id }}"
                                                                class="btn btn-outline btn-danger ">
                                                            <i class="fa fa-btn fa-trash"></i>&nbsp;Delete
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
        </div>

    </div>
    </div>


    <a href="{{url('/post/add')}}">

        <button class="site-action btn-raised btn btn-success btn-floating" data-target="#addTopicForm"
                type="button">
            <i class="icon wb-pencil" aria-hidden="true"></i>
        </button></a>
@endsection
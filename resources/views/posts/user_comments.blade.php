@extends('layouts.layout')

@section('contents')

    @foreach($contents as $content)
        <div class="page animsition">
            <div class="page-header page-header-bordered">
                <h1 class="page-title">{{$content->post_name}}</h1>
                <div class="metas">
                    <span class="author">By {{$content->user->name}}</span>
                    <span class="started">Created at {{$content->created_at}} </span>
                </div>
            </div>
            <div class="page-content">
                <div class="panel">
                    <div class="panel-body">
                        <h4>{!! nl2br ($content->post_content)!!}</h4>

                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Comments</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <tbody>
                            @foreach($comments as $comment)
                                <tr>

                                    <td class="table-text">
                                        <div>
                                            <div class="metas">
                                                <span class="author">{{$comment->user->name}}</span>
                                                <span class="started">Commented at {{$comment->created_at}} </span>
                                            </div>
                                            <h5>{!! nl2br($comment->comments) !!}</h5></div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        <div class="modal-body container-fluid">

                            <form action="/post/{{$content->id}}/comment" method="POST">
                                {{ csrf_field() }}
                                        <!--comment txt-->

                                <div class="form-group row">

                                    <div class="col-xs-6">
                                        <textarea class="form-control" name="comments" id="comment-txt" cols="90"
                                                  rows="10" placeholder="Write comment here..."></textarea>
                                    </div>
                                </div>

                                <!-- Add Task Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-btn fa-plus"></i>&nbsp;Comment
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


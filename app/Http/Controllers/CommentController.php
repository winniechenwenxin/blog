<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Post;
use App\User;
use App\Repositories\CommentRepository;

class CommentController extends Controller
{
    /**
     * The comment repository instance.
     *
     * @var TaskRepository
     */
    protected $comments;


    /**
     *
     * Create a new controller instance.
     *
     * @param  CommentRepository  $comments
     * @return void
     */
    public function __construct(CommentRepository $comments)
    {
        $this->middleware('auth');

        $this->comments = $comments;
    }

    /**
     * Create a new post.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     * @internal param Request $rexquest
     */
    public function store(Request $request,$id)
    {
        $this->validate($request, [
            'comments' => 'required|max:255',
        ]);

            $request->user()->comments()->create([
                'comments' => $request->comments,
                 'post_id'=>$id,
            ]);

       return view('posts.user_comments',[
           'contents' => $this->comments->forContent($id),
           'comments'=>$this->comments->forComment($id),
       ]);
    }

    public function getPostContent(Request $request,$id){

        return view('posts.user_comments', [
            'contents' => $this->comments->forContent($id),
            'comments'=>$this->comments->forComment($id),
        ]);

    }







}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Redirect;
use Input;
use Validator;
use Response;//facade


class PostController extends Controller
{
    /**
     * The post repository instance.
     *
     * @var PostRepository
     */
    protected $posts;

    /**
     * Create a new controller instance.
     *
     * @param  PostRepository $posts
     * @return void
     */
    public function __construct(PostRepository $posts)
    {
        $this->middleware('auth');

        $this->posts = $posts;
    }

    public function getAllPosts(Request $request)
    {

        return view('posts.all_posts', [
            'posts' => $this->posts->forAllPost(),
        ]);
    }


    public function getOwnPosts(Request $request)
    {
        return view('posts.my_posts', [
            'posts' => $this->posts->forOwnPost($request->user()),
        ]);
    }

    /**
     * Create a new post.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'post_name' => 'required|max:255',
            'post_content' => 'required|max:255',
        ]);

        $request->user()->posts()->create([
            'post_name' => $request->post_name,
            'post_content' => $request->post_content,
        ]);

        return redirect('/post/my');
    }

    /**
     * Destroy the given post.
     *
     * @param  Request $request
     * @param  Post $post
     * @return Response
     */
    public function deletePosts(Request $request, Post $post)
    {
        $this->authorize('deletePosts', $post);

        $post->delete();

        return redirect('/post/my');
    }

    public function uploadFiles(Request $request)
    {

        // GET ALL THE INPUT DATA , $_GET,$_POST,$_FILES.
        $input = \Request::all();

        // VALIDATION RULES
        $rules = array(
            'image' => 'required|image',
        );

        // PASS THE INPUT AND RULES INTO THE VALIDATOR
        /** @var \Illuminate\Validation\Validator $validation */
        $validation = Validator::make($input, $rules);

        // CHECK GIVEN DATA IS VALID OR NOT
        if ($validation->fails()) {
            //return Redirect::to('/')->with('message', $validation->errors()->first());
            return Redirect::back()->withErrors($validation);
        }

        $file = $request->file('image');

        //$file = array_get($input, 'file');
        // SET UPLOAD PATH
        $destinationPath = storage_path('app/public/');
        // GET THE FILE EXTENSION
        $extension = $file->getClientOriginalExtension();
        // RENAME THE UPLOAD WITH RANDOM NUMBER
        $fileName = rand(11111, 99999) . '.' . $extension;
        // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
        $upload_success = $file->move($destinationPath, $fileName);


        // IF UPLOAD IS SUCCESSFUL SEND SUCCESS MESSAGE OTHERWISE SEND ERROR MESSAGE
        if ($upload_success) {
//            return redirect()->back()->with('message', 'Image uploaded successfully');
            return back()->with('status', 'Image uploaded successfully');
//            return Redirect::back()->with('message', 'Image uploaded successfully');
        }

    }

}

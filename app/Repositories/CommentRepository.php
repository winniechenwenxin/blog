<?php

namespace App\Repositories;

use App\User;
use App\Comment;
use App\Post;

class CommentRepository
{

    public function forContent($id)
    {
        $tables = Post::with('user')
            ->where('id',$id)
            ->orderBy('created_at', 'asc')
            ->get();

        return $tables;
    }


    public function forComment($id)
    {
        $tables = Comment::with('posts')
            ->with('user')
            ->where('post_id',$id)
            ->orderBy('created_at', 'asc')
            ->get();

        return $tables;
    }

}

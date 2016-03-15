<?php

namespace App\Repositories;

use App\User;
use App\Post;


class PostRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forAllPost()
    {

        $tables = Post::with('user')
            ->orderBy('created_at', 'asc')
            ->get();

        return $tables;
    }

}

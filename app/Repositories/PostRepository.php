<?php

namespace App\Repositories;

use App\User;
use App\Post;
use DB;

class PostRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser()
    {
        $tables=DB::table('tasks')
            ->orderBy('created_at', 'asc')
            ->get();
        return $tables;
    }


}

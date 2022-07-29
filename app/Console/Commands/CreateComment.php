<?php

namespace App\Console\Commands;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Console\Command;

class CreateComment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comment:create {user_id} {comment}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a comment for a user.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user_id = $this->argument('user_id');
        $user_comment = $this->argument('comment');

        if (empty($user_id) || empty($user_comment)) {
            $this->error('Error! user_id and comment is required.');

            return false;
        }

        $user = User::find($user_id);

        if (empty($user)) {
            $this->error('Error! user_id is invalid.');

            return false;
        }

        $comment = new Comment;
        $comment->user_id = $user_id;
        $comment->content = $user_comment;
        $comment->save();

        $this->info("Comment is created.");

        return true;
    }
}

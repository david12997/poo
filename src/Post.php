<?php

namespace App;

class Post
{

    protected $comments = [];

    public function VerifyComment($comment)
    {

        if ($comment !== null) {

            return true;
        } else {

            return false;
        }
    }

    public function AddComment($comment)
    {

        $this->comments[] = $comment;
    }

    public function contComments()
    {
        return count($this->comments);
    }

    public function getComments()
    {
        return $this->comments;
    }
}

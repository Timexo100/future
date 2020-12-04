<?php
include "comment.php";

class CommentsContainer 
{
    public $comments = [];

    function __construct($comments)
    {
        foreach ($comments as $comment) {
            $comment = new Comment($comment['userName'], $comment['date'], $comment['text']);
            array_push($this->comments, $comment);
        }
    }

    function showComments()
    {
        foreach ($this->comments as $comment) {
            $comment->show();
        }
    }

}
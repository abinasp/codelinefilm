<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 9/23/2018
 * Time: 2:54 AM
 */

namespace App\Services;


use App\Comment;

class CommentService
{
    public function createComment($userId,$filmId,$comment){
        $newComment = new Comment();
        $newComment->user_id = $userId;
        $newComment->film_id = $filmId;
        $newComment->comment = $comment;
        if($newComment->save()){
            return $newComment;
        }else{
            return null;
        }
    }
}
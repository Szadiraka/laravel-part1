<?php
namespace App\Services;
use App\Models\Comment;
use App\Models\User;
class CommentService
{
 
    public function  getAllComments()
    {
        return Comment::all();
    }

    // public function getAllCommentsWithUsers()
    // {
    //     $comments = Comment::with('user')->get();
    //     if ($comments->isEmpty()) {
    //         return response()->json(['message' => 'No comments found.'], 404);
    //     }
    
    //     return response()->json($comments, 200);    
    // }

    public function getCommentById($id)
    {
        return Comment::find($id);
    }
    public function getCommentWithUser($id)
    {
        return Comment::with('user')->find($id);
    }

    public function createComment(array $data)
    {
        return Comment::create($data);
    }

    public function updateComment($id, array $data)
    {
        $comment= Comment::find($id);
        
        return $comment->update($data);
    }

    public function deleteComment( $id)
    {
        $comment= Comment::find($id);
        return $comment->delete();
    } 
    public function getAllCommentsWithUsers()
    {
        return Comment::with('user')->get();
    }
}
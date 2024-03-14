<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Services\CommentService;
use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    protected $commentService;
    public function __construct(CommentService $commentService)
    {
     $this->commentService = $commentService;
    }

   public function index()
 {
     $comments= $this->commentService->getAllComments();
     return response()->json($comments);
 }

 public function indexWithUser()
 {
     $comments= $this->commentService->getAllCommentsWithUsers();
     return response()->json($comments);
 }

 public function store(Request $request)
 {
     $data = $request->validate([
         'text' => 'required|max:1024',
         'user_id' => 'required|exists:users,id',
     ]);
     $comments= $this->commentService->createComment($data);
      return response()->json($comments);           
 }

 public function show($id)
 {
     $comment = $this->commentService->getCommentById($id);
     return response()->json($comment);
 }

 public function showWithUser($id )
 {
    $comment = $this->commentService->getCommentWithUser($id);
    return response()->json($comment);
 }

 public function update(Request $request, Comment $comment)
 {
     $id= $request->input('id');
     $data = $request->validate([
        'text' => 'required|max:512',
        'user_id' => 'required|exists:users,id',
     ]);
     $comment = $this->commentService->updateComment($id, $data);
     return response()->json($comment);     
 }

 public function destroy($id)
 {
    $comments= $this->commentService->deleteComment($id);
    return responce()->json($comments);
 }

//  public function getCommentsWithUsers()
//  {
//      $results= $this->commentService->getAllCommentsWithUsers();
//      return response()->json($results);
//  }
    
}

<?php

namespace App\Http\Controllers;

use App\Services\MessageService;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected $messageService;
       public function __construct(MessageService $messageService)
       {
        $this->messageService = $messageService;
       }

      public function index()
    {
        $messages= $this->messageService->getAllMessages();
        return response()->json($messages);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'text' => 'required|max:1024',
            'sender_id' => 'nullable',
            'receiver_id' => 'nullable',
        ]);
        $messages= $this->messageService->createMessage($data);
         return response()->json($messages);           
    }

    public function show(Request $request)
    {
        $message = $this->messageService->getMessageById($request->$id);
        return response()->json($message);
    }
     public function showbyUserId($id)
     {
        $messages = $this->messageService->getMessageByUserId($id);
        return response()->json($messages);
     }

    public function update(Request $request, Message $message)
    {
        $id= $request->input('id');
        $data = $request->validate([
            'text' => 'required|max:1024',
             'sender_id' => 'nullable',
             'receiver_id' => 'nullable',
        ]);
        $message = $this->messageService->updateMessage($id, $data);
        return response()->json($message);     
    }

    public function destroy($id)
    {
       $messages= $this->messageService->deleteMessage($id);
       return response()->json($messages);
    }




       
}

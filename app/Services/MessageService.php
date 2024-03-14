<?php
namespace App\Services;
use App\Models\Message;
class MessageService
{

    public function  getAllMessages()
    {
        return Message::all();
    }

    public function getMessageById($id)
    {
        return Message::find($id);
    }

    public function createMessage(array $data)
    {
        return Message::create($data);
    }

    public function updateMessage($id, array $data)
    {
        $message=Message::find($id);
        return $message->update($data);
    }

    public function deleteMessage( $id)
    {
        $message=Message::find($id);
        return $message->delete();
    }

    public function getMessageByUserId($id) // получаем все сообщения определенного пользователя
    {
        $messages = Message::where('sender_id', $id)
                ->orWhere('receiver_id', $id)
                ->orderBy('created_at', 'asc')->get();
        return $messages;
    }
}
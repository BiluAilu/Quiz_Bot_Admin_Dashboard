<?php
namespace App\Helper;
use Telegram\Bot\Laravel\Facades\Telegram;

class FunctionHelper{

    public function sendTelegramMessage($userId, $message)
    {
        Telegram::sendMessage([
            'chat_id' => $userId,
            'text' => $message,
        ]);
    }
}


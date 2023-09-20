<?php

namespace App\Http\Integrations\Telegram;

use DefStudio\Telegraph\Facades\Telegraph as Telegraph;
use DefStudio\Telegraph\Handlers\WebhookHandler;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;
use DefStudio\Telegraph\Keyboard\ReplyButton;
use DefStudio\Telegraph\Keyboard\ReplyKeyboard;


class Handler extends WebhookHandler
{
    public function hello()
    {   
        $this->reply('yesy0');
    }

    public function show()
    {
        Telegraph::message('hello world')->send();
    }
}
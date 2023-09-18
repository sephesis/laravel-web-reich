<?php

namespace App\Http\Integrations\Telegram;

use DefStudio\Telegraph\Handlers\WebhookHandler;

class Handler extends WebhookHandler
{
    public function hello()
    {
        $this->reply('test');
    }
}
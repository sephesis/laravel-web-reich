<?php

namespace App\Http\Integrations\Telegram;

use App\Resourses\Export\ExcelFileGenerator;
use App\Resourses\Export\XMLFileGenerator;
use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Handlers\WebhookHandler;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;
use Illuminate\Support\Stringable;

class Handler extends WebhookHandler
{
    public function clients()
    {
        Telegraph::message('В каком формате нужны данные о клиентах?')
        ->keyboard(Keyboard::make()->buttons([
                Button::make('Excel')->action('download')->param('type', 'excel'),
                Button::make('XML')->action('download')->param('type', 'xml'),
                Button::make('Текст')->action('download')->param('type', 'text'),
        ]))->send();
    }

    public function download(): void
    {
        $type = $this->data->get('type');

        switch ($type) {
            case 'excel':
                $generator = new ExcelFileGenerator();
                $test = $generator->generate();
                break;
            case 'xml':
                $generator = new XMLFileGenerator();
                $test = $generator->generate();
                break;
            case 'text':
                $test = 'text';
                break;
        }
        
        Telegraph::message($test)->send();
    }

    protected function handleUnknownCommand(Stringable $text): void
    {
        if ($text->value() === '/start') {
            $this->bot->registerCommands([
                'clients' => 'Покажи список клиентов за последнее время',
            ])->send();
        }else{
            $this->reply('Неизвестная команда');
        }    
    }
}
<?php

namespace App\Http\Integrations\Telegram;

use App\Resourses\Export\ExcelFileGenerator;
use App\Resourses\Export\XMLFileGenerator;
use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Handlers\WebhookHandler;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;
use Illuminate\Support\Stringable;
use Illuminate\Support\Facades\Storage;

class Handler extends WebhookHandler
{
    public function clients(): void
    {
        Telegraph::message('В каком формате нужны данные о клиентах?')
        ->keyboard(Keyboard::make()->buttons([
                Button::make('Excel')->action('download')->param('type', 'excel'),
                Button::make('XML')->action('download')->param('type', 'xml'),
                Button::make('Текст')->action('download')->param('type', 'text'),
        ]))->send();
    }

    public function statistic(): void
    {
        Telegraph::message('Вот ваша статистика')->send();
    }

    public function download(): void
    {
        $type = $this->data->get('type');

        switch ($type) {
            case 'excel':
                $generator = new ExcelFileGenerator(1);
                $fileName = 'export_' . md5(date('d-m-y')). '.xlsx';
                $result = $generator->generate($fileName);
                break;
            case 'xml':
                $generator = new XMLFileGenerator(1);
                $fileName = 'export_' . md5(date('d-m-y')). '.xml';
                $result = $generator->generate($fileName);
                break;
            case 'text':
                $result = 'text';
                break;
        }

        Telegraph::document($result)->html('Сгенерировал вам следующий файл')->send();
    }

    protected function handleUnknownCommand(Stringable $text): void
    {
        if ($text->value() === '/start') {
            $this->bot->registerCommands([
                'clients' => 'Покажи список клиентов',
                'statistic' => 'Покажи статистику',
            ])->send();
        }else{
            $this->reply('Неизвестная команда');
        }    
    }
}
<?

namespace App\Resourses\Integrations\Bots;

class Config
{
    private const API_KEY = '6067028816:AAGVaERZvxw99sz2jFNB9LhCMhqT9NI7Ejs';

    private const API_URL = 'https://api.telegram.org/bot';

    public static function buildUrl(string $method)
    {
        return self::API_URL . self::API_KEY . '/' . $method;
    }
}
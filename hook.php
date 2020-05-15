<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '1238595732:AAFgb41Yn2mrvWB27F1HjPbfEyY6P3JBM9I';
$bot_username = 'My15052020bot';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    echo $e->getMessage();
}
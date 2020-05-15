<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '1238595732:AAFgb41Yn2mrvWB27F1HjPbfEyY6P3JBM9I';
$bot_username = 'My15052020bot';
$hook_url     = 'https://bot15052020.herokuapp.com/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}
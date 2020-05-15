<?php

use TelegramBot\TelegramBotManager\BotManager;

// Load composer.
require_once __DIR__ . '/vendor/autoload.php';

try {
    $bot = new BotManager([
        // Vitals!
        'api_key'      => '1238595732:AAFgb41Yn2mrvWB27F1HjPbfEyY6P3JBM9I',

        // Extras.
        'bot_username' => 'My15052020bot',
        'secret'       => 'super_secret',
        'webhook'      => [
            'url' => 'https://bot15052020.herokuapp.com/index.php',
        ]
    ]);

    $bot->run();
    
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}


$result = Request::sendMessage([
    'chat_id' => $chat_id,
    'text'    => 'Your utf8 text 😜 ...',
]);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Test Slider</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Большая надпись</h1>
</body>
</html>
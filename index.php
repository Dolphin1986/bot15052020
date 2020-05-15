<?php
require __DIR__ . '/vendor/autoload.php';


$bot->run();

$telegram -> useGetUpdatesWithoutDatabase();

$hook_url = __DIR__'/hook.php';

$result = $telegram->setWebhook($hook_url);

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

</body>
</html>
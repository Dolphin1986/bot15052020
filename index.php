<?php
require __DIR__ . '/vendor/autoload.php';

$telegram- > useGetUpdatesWithoutDatabase ();

$bot->run();

$bot- > setCustomGetUpdatesCallback (function (ServerResponse $ get_updates_response) {
    $results = array_filter ((array) $get_updates_response- > getResult ());

    return sprintf ('Есть% d update (s)'. PHP_EOL, count ($results));
});

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
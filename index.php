<?php
require __DIR__ . '/vendor/autoload.php';

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
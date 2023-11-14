<?php
$file = fopen('chat.txt', 'a+');


if (isset($_GET['message'])) {
    var_dump($_GET['message']);
    $message = strip_tags("Автор: " . $_GET['name'] . ", сообщение: " . $_GET['message']);
    fputs($file, $message . "\n");
    echo "ok";
    die();
}

$messages = [];

while (!feof($file)) {
    $messages[] = fgets($file);
}
$messages = array_reverse($messages);

$i = 0;
foreach ($messages as $message) {
    $i++;
    echo $message;
    if ($i > 15) break;
}
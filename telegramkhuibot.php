<?
$access_token = '158309594:AAEP2SaNrEFHRXCP5yfY4zv2vHQA51Dfcvo';
$api = 'https://api.telegram.org/bot' . $access_token;

$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = 80226362;
$message = $output['message']['text'];

switch($message) {
case 'Qwerty':
sendMessage($chat_id, 'Hello World!');
break;
default:
sendMessage($chat_id, 'пошёл на хуй');
break;
}

function sendMessage($chat_id, $message) {
file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message));
}

?>

<?php
$variables = [
    'CAT_API_KEY' => 'PUT-YOUR-CAT-API-KEY-HERE',
];
foreach ($variables as $key => $value) {
    putenv("$key=$value");
}

<?php
require __DIR__ . '/../functions.php';

cors();

header('Content-Type: application/json');

$page = file_get_contents('php://input');

file_put_contents(__DIR__ . '/../page_last_version.json', $page);

echo $page;
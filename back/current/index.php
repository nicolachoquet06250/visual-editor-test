<?php

require __DIR__ . '/../functions.php';

header('Content-Type: application/json');

cors();

if (file_exists(__DIR__ . '/../page_last_version.json')) {
    echo file_get_contents(__DIR__ . '/../page_last_version.json');
} else {
    echo '[]';
}
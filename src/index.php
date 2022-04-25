<?php

header('Content-Type: text/html; charset=utf-8');

if ($_SERVER['REQUEST_URI'] === '/') {// Guard clause
    exit(file_get_contents(__DIR__ . '/index.html')); // show website
}

if ($_SERVER['REQUEST_URI'] == "/leagues") {
    echo "Hello leagues";
} else {
    http_response_code(404);
}

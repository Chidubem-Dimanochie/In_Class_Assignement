<?php
$request_uri = $_SERVER['REQUEST_URI'];

if ($request_uri === '/html') {
    header('Content-Type: text/html');
    echo "<!DOCTYPE html>
    <html>
    <head>
        <title>HTML Page</title>
    </head>
    <body>
        <h1>Welcome to the HTML Page</h1>
        <p>Chidubem Dimanochie.</p>
    </body>
    </html>";
} elseif ($request_uri === '/JSON') {
    header('Content-Type: application/json');
    $data = [
        "message" => "This is a JSON response",
        "status" => "success"
    ];
    echo json_encode($data);
} else {
    header("HTTP/1.0 404 Not Found");
    echo "Page not found";
}
?>
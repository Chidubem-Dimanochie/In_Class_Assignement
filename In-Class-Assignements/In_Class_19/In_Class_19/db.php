<?php

// Get the absolute path to the .env file
$envPath = __DIR__ . '/.env';

// Check if the .env file exists
if (!file_exists($envPath)) {
    die(json_encode(['error' => 'Missing .env file at ' . $envPath]));
}

// Load environment variables
$env = parse_ini_file($envPath);

if (!$env) {
    die(json_encode(['error' => 'Failed to parse .env file']));
}

$host = $env['DB_HOST'];
$db   = $env['DB_NAME'];
$user = $env['DB_USER'];
$pass = $env['DB_PASS'];
$port = $env['DB_PORT'];

try {
    // Create the PDO connection
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    
    // Query to fetch data from posts table
    $stmt = $pdo->query("SELECT * FROM posts");
    $posts = $stmt->fetchAll();
    
    // Output the data as JSON
    echo json_encode($posts, JSON_PRETTY_PRINT);

} catch (PDOException $e) {
    die(json_encode(['error' => 'Database connection failed: ' . $e->getMessage()]));
}
?>

<?php



$envFile = __DIR__ . '../.env';

if (file_exists($envFile)) {
    $env = file_get_contents($envFile);
    $lines = explode(PHP_EOL, $env);

    foreach ($lines as $line) {
        if ($line !== '' && strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }
}

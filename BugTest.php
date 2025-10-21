<?php
// Basic test of {{variable}} syntax handling

$vars = [
    'Date' => '2025-10-21',
    'Time' => '12:34:56',
    'Name' => 'Test User'
];

$template = <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template Test</title>
</head>
<body>
    <h1>Variable Replacement Test</h1>
    <p>Date: {{Date}}</p>
    <p>Time: {{Time}}</p>
    <p>Hello, {{Name}}!</p>
</body>
</html>
EOT;

// Replace placeholders
foreach ($vars as $key => $value) {
    $template = str_replace('{{' . $key . '}}', $value, $template);
}

echo $template;
?>

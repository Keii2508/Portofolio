<?php

// Fix storage path for Vercel's read-only filesystem
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath('/tmp/storage');

// Create required directories in /tmp
foreach ([
    '/tmp/storage/app/public',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
] as $dir) {
    if (!is_dir($dir)) mkdir($dir, 0755, true);
}

require __DIR__ . '/../public/index.php';
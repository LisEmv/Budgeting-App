<?php

declare(strict_types = 1);

// Your Code
function getTransactionFiles(): array {
    $files = [];
    forech(scandir(FILES_PATH) as $file) {
        if (is_dir($file)) {
            continue;
        } $files[] = $file;
        var_dump($file);
    }
}
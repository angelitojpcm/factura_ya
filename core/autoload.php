<?php
spl_autoload_register(function ($class_name) {
    $directories = [
        'controllers/',
        'models/',
        'core/'
    ];

    foreach($directories as $directory) {
        $filename = __DIR__ . '/../' . $directory . $class_name . '.php';
        if (is_file($filename)) {
            require $filename;
            break;
        }
    }
});
?>
<?php
class ErrorHandler {
    public static function handleException($exception) {
        http_response_code(500);
        echo "Ha ocurrido un error: " . $exception->getMessage();
    }

    public static function handleError($level, $message, $file, $line) {
        throw new ErrorException($message, 0, $level, $file, $line);
    }
}

set_error_handler([ErrorHandler::class, 'handleError']);
set_exception_handler([ErrorHandler::class, 'handleException']);
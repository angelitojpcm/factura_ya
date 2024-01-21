<?php
class Error {
    public function __construct($exception) {
        $this->exception = $exception;
    }

    public function handle() {
        http_response_code($this->exception->getCode());
        include '../views/error.php';
    }
}
?>
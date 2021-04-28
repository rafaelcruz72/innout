<?php

class ValidationException extends AppException {

    private $errors = [];

    public function __contruct(
        $errors = [],
        $message = 'Erros de validação', 
        $code = 0, 
        $previous = null) {
        parent::_construct($message, $code, $previous);
        $this->errors = $errors;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function get($att) {
        return $this->errors[$att];
    }
}
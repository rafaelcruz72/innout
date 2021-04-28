<?php

class AppException extends Exception {

    public function __contruct($message, $code = 0, $previous = null) {
        parent::_construct($message, $code, $previous);
    }
}
<?php

namespace app\controllers;

use Exception;
use Error;

function myErrorHandler($errno, $errstr, $errfile, $errline) {
    echo 'my error handler called';
    exit();
}

class ErrorController {

    public function warningFunction() {
        preg_match('There will be a warning about missing delimiter here!', 'test');
    }

    public function errorFunction() {
        $price = 7;
        $quantity = 'five';
        $price * $quantity;
    }

    public function viewErrors() {
        $this->warningFunction();

        try {
            if (true) {
                throw new Exception('Custom error message thrown from the try block!');
            }
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage();
        }
    }
}

$controller = new ErrorController();
$controller->viewErrors();
?>

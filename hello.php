<?php
namespace qzy\hello;

class Hello {

    public function __construct() {
        echo "qzy\hello has load";
    }

    public static function say($p) {

        return "hello world.  $p";
    }
}

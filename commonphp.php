<?php

function import ($module) {
    $exports = new class {
        private $container;

        public function __get ($name) {
            return $this->container[$name];
        }

        public function __set ($name, $value) {
            $this->container[$name] = $value;
        }

        public function export () {
            return $this->container;
        }
    };

    if(!file_exists(__DIR__ . "/{$module}.php")){
        trigger_error("Can't load module! ({$module})", E_USER_ERROR);
    }

    require_once (__DIR__ . "/{$module}.php");

    return (object) $exports->export();
}

?>
<?php 
spl_autoload_register(function ($class_name) {
    include "connect/".$class_name . '.php';
});
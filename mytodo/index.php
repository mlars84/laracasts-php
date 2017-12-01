<?php

class Task {
     public function __construct()
     {
         //Automatically triggerd on instantiation
     }
}

//any args passed here can be excepted in constructor method in class (__construct())
$task = new Task();

require('index.view.php');
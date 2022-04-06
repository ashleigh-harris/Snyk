<?php

class MySanitiser
{
    public function __construct(){

    }

    public function sanitise(string $input){

        return htmlspecialchars($input, ENT_QUOTES);
    }
}
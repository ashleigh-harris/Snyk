<?php

class MySanitiser
{
    public function __construct(){

    }

    public function sanitise(string $input){

        $sanitisedOutput = htmlspecialchars($input, ENT_QUOTES);

        return $sanitisedOutput;
    }
}
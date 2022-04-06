<?php

class MyClass
{
    private string $userName;

    public function __construct(string $userName){

        $mySanitiser = new MySanitiser();

        $this->userName = $mySanitiser->sanitise($userName);
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
}
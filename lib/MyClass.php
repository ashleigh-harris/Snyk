<?php

class MyClass
{
    private string $userName;

    public function __construct(string $userName){

        $this->userName = htmlspecialchars($userName, ENT_QUOTES);
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
}
<?php

class Adatbazis{
    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli("127.0.0.1", "root", "", "webshop");
    }
}
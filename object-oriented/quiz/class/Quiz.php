<?php

class Quiz
{
    public function __construct($id = 0)
    {
        $this->id = $id;
    }

    public function setId($id) { $this->id = $id; }
    public function getId() { return $this->id; }
}
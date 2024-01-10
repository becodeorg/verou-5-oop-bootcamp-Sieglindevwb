<?php

declare(strict_types=1);

class Content {
    public $title; 
    public $text;

    public function __construct(string $title, string $text){
        $this->title = $title;
        $this->text = $text; 
    }

    public function getTitle() {
        return $this->title;
    }

    public function getText() {
        return $this->text;
    }

}
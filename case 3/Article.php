<?php

declare(strict_types=1);

class Article extends Content {

    private $breakingNews;

    public function __construct (string $title, string $text, bool $breakingNews = false) {
        parent::__construct($title, $text);
        $this->breakingNews = $breakingNews;
    }

    public function isBreakingNews() {
        return $this->breakingNews;
    }

    public function displayTitle() {
        if ($this->isBreakingNews()) {
            return 'BREAKING: ' . $this->getTitle();
        } else {
            return $this->getTitle();
        }
    }
}
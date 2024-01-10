<?php

declare(strict_types=1);

class Article extends Content {

    public function displayTitle() {
        return $this->getTitle();
    }
}
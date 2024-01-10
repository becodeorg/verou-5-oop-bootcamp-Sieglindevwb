<?php

declare(strict_types=1);

class Ad extends Content {

    public function displayTitle() {
        return strtoupper($this->getTitle());
    }
}
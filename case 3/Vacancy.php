<?php

declare(strict_types=1);

class Vacancy extends Content {

    public function displayTitle() {
        return $this->getTitle() . '- apply now!';
    }
}
<?php

declare(strict_types=1);

class Student {
    public $name;
    public $grade; 

    public function __construct(string $name, float $grade) {
        $this->name = $name;
        $this->grade = $grade; 
    }

    public function getGrade(): float {
        return $this->grade;
    }

    public function getName(): string {
        return $this->name;
    }
}
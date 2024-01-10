<?php

declare(strict_types=1);

require_once 'Student.php';

class Group {

    private $students = []; 

    public function addStudent(Student $student){
        $this->students[] = $student;
    }

    public function calculateAverage(){
        $averageGrade = 0;

        foreach ($this->students as $student) {
            $averageGrade += $student->getGrade();
        }

        return count($this->students) > 0 ? $averageGrade / count($this->students) : 0;

    }

    public function moveStudent(){

    }

    public function getStudents(){
        return $this->students;
    }
}
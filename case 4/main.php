<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'Student.php';
require_once 'Group.php';

function generateRandomGrade(): float {
    return mt_rand(0, 100)/10;
}

$studentData = [
    ['Chandler', generateRandomGrade()],
    ['Joey', generateRandomGrade()],
    ['Monica', generateRandomGrade()],
    ['Ross', generateRandomGrade()],
    ['Rachel', generateRandomGrade()],
    ['Phoebe', generateRandomGrade()],
    ['Janice', generateRandomGrade()],
    ['Gunther', generateRandomGrade()],
    ['Ben', generateRandomGrade()],
    ['Richard', generateRandomGrade()],
    ['Mike', generateRandomGrade()],
    ['Mona', generateRandomGrade()],
    ['Susan', generateRandomGrade()],
    ['Emily', generateRandomGrade()],
    ['Carol', generateRandomGrade()],
    ['Mr. Treeger', generateRandomGrade()],
    ['Ursula', generateRandomGrade()],
    ['Jill', generateRandomGrade()],
    ['Jack', generateRandomGrade()],
    ['Judy', generateRandomGrade()],
];


$group1 = new Group();
for ($i = 0; $i < 10; $i++) {
    list($name, $grade) = $studentData[$i];
    $student = new Student($name, $grade);
    $group1->addStudent($student);
}
/*
var_dump(count($group1->getStudents())); 
var_dump($group1->getStudents()); 
*/

$group2 = new Group();
for ($i = 10; $i < 20; $i++) {
    list($name, $grade) = $studentData[$i];
    $student = new Student($name, $grade);
    $group2->addStudent($student);
}

echo $group1->calculateAverage();
echo '<br>';
echo $group2->calculateAverage();
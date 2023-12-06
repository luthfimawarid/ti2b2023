<?php

include_once "departement.php";
include_once "universitas.php";

$computerScience = new Department("Computer Science");
$mathematics = new Department("Mathematics");

$university = new University("ABC University");
$university->addDepartment($computerScience);
$university->addDepartment($mathematics);

$departments = $university->getDepartments();

foreach ($departments as $department) {
    echo $university->getDepartments() . " has a department: " . $department->getName() . "<br>";
}
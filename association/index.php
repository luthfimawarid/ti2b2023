<?php

include_once "studen.php";
include_once "course.php";

$student = new Student("John Doe");
$course = new Course("Programming 101");

echo $student->getName() . " is enrolled in " . $course->getCourseName();

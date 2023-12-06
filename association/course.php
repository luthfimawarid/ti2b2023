<?php
include_once "studen.php";

class Course {
    private $courseName;

    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    public function getCourseName() {
        return $this->courseName;
    }
}
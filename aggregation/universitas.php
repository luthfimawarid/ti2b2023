<?php

include_once "departement.php";


class University {
    private $name;
    private $departments;

    public function __construct($name) {
        $this->name = $name;
        $this->departments = array();
    }

    public function addDepartment(Department $department) {
        $this->departments[] = $department;
    }

    public function getDepartments() {
        return $this->departments;
    }
}

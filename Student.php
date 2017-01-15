<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Billy
 */
class Student {
    /*
     * Constructor for a Student class.  Contains the first name, last name,
     * email, and grades.
     */
    function __construct(){
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    /*
     * Adds a key/value pair to the emails array, where the first
     * parameter is the email type and the second parameter is
     * the email address.
     */
    function add_email($which, $address){
        $this->emails[$which] = $address;
    }
    /*
     * Adds a grade score to the grades array for the Student.
     */
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    /*
     * Calculates the average of the Student's grades.
     */
    function average(){
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    /*
     * Displays the name, grade average, and emails of the Student.
     */
    function toString(){
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}

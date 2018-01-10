<?php

/**
 * Description of Student
 *
 * @author Justin
 */
class Student {

    /**
     * Constructor.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * Add email.
     *
     * @param $which
     * @param $address
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Add grade.
     *
     * @param $grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * Calculate average.
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
        $total += $value;
        return $total / count($this->grades);
    }

    /**
     * Print student details.
     */
    function toString() {
        $result = '<h5>' . $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n" . '</h5><hr>';
        foreach($this->emails as $which=>$what)
            $result .= '<b>' . $which . '</b>' . ': '. $what. "\n";
            $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }

}

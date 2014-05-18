<?php

class Calculator {

    private function add($first_number, $second_number) {
        $data = array();
        $data[0] = "Addition";
        $data[1] = $first_number + $second_number;
        return $data;
    }

    protected function sub($first_number, $second_number) {
        $data = array();
        $data[0] = "Subtruction";
        $data[1] = $first_number - $second_number;
        return $data;
    }

    public function mul($first_number, $second_number) {
        $data = array();
        $data[0] = "Multiplication";
        $data[1] = $first_number * $second_number;
        return $data;
    }

    public function div($first_number, $second_number) {
        $data = array();
        $data[0] = "divition";
        if ($second_number == 0) {
            $data[1] = 'Undefine';
        } else {
            $data[1] = $first_number / $second_number;
        }
        return $data;
        //$this->
    }

    public function rim($first_number, $second_number) {
        $data = array();
        $data[0] = "Reminder";
        if ($second_number == 0) {
            $data[1] = 'Undefine';
        } else {
            $data[1] = $first_number % $second_number;
        }
        return $data;
    }

}

?>

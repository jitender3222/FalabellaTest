<?php
require "Checker.php";


class TestCases
{
    //Test case for number divisible by 3
    public function testDivideBy3(){
        echo "Executing divisible By 3 Test Cases <br>";
        $checker_obj = new Checker();
        $this->checkEqual(0, $checker_obj->returnRemainder(6, 3));
        $this->checkEqual(0, $checker_obj->returnRemainder(33, 3));
        $this->checkEqual(0, $checker_obj->returnRemainder(57, 3));
        $this->checkEqual(0, $checker_obj->returnRemainder(99, 3));
        $this->checkNotEqual(0, $checker_obj->returnRemainder(55, 3));
        $this->checkNotEqual(0, $checker_obj->returnRemainder(88, 3));
    }

    //Test case for number divisible by 5
    public function testDivideBy5(){
        echo "Executing divisible By 5 Test Cases <br>";
        $checker_obj = new Checker();
        $this->checkEqual(0, $checker_obj->returnRemainder(5, 5));
        $this->checkEqual(0, $checker_obj->returnRemainder(35, 5));
        $this->checkEqual(0, $checker_obj->returnRemainder(90, 5));
        $this->checkEqual(0, $checker_obj->returnRemainder(65, 5));
        $this->checkNotEqual(0, $checker_obj->returnRemainder(22, 5));
        $this->checkNotEqual(0, $checker_obj->returnRemainder(99, 5));
    }

    //Test case for number divisible by 3 and 5
    public function testDivideBy3And5(){
        echo "Executing divisible By 3 and 5 Test Cases <br>";
        $checker_obj = new Checker();
        $this->checkEqual(0, $checker_obj->returnRemainder(15, 3) + $checker_obj->returnRemainder(15, 5));
        $this->checkEqual(0, $checker_obj->returnRemainder(45, 3) + $checker_obj->returnRemainder(45, 5));
        $this->checkEqual(0, $checker_obj->returnRemainder(75, 3) + $checker_obj->returnRemainder(75, 5));
        $this->checkEqual(0, $checker_obj->returnRemainder(60, 3) + $checker_obj->returnRemainder(60, 5));
        $this->checkNotEqual(0, $checker_obj->returnRemainder(32, 3) + $checker_obj->returnRemainder(32, 5));
        $this->checkNotEqual(0, $checker_obj->returnRemainder(99, 3) + $checker_obj->returnRemainder(99, 5));
    }

    private function checkEqual($val1, $val2){
        if ($val1 == $val2)
            echo "OK <br>";
        else
            echo "Failed <br>";
    }

    private function checkNotEqual($val1, $val2){
        if ($val1 != $val2)
            echo "OK <br>";
        else
            echo "Failed <br>";
    }
}


$tc = new TestCases();
$tc->testDivideBy3();
$tc->testDivideBy5();
$tc->testDivideBy3And5();
?>
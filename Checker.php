<?php
require "Variables.php";

class Checker{

    public function mainFunc($maxNum){
        for($i=1; $i<=$maxNum; $i++){
            $varObj = new Variables();
            $varObj->num = $i;
            $varObj->divideBy3  = $this->returnRemainder($i,3);
            $varObj->divideBy5  = $this->returnRemainder($i,5);
            $varObj->devideBy3and5 = $varObj->divideBy3+$varObj->divideBy5;
            $this->writeResult($varObj);
        }
    }

    private function returnRemainder($dividend, $divider){
        return $dividend%$divider;
    }

    private function writeResult($varObj){
        switch ($varObj) {
            case ($varObj->devideBy3and5 == 0 ):
                echo "Linianos <br>";
                break;
            case ($varObj->divideBy3 == 0):
                echo "Linio <br>";
                break;
            case ($varObj->divideBy5 == 0):
                echo "IT <br>";
                break;
            default:
                echo $varObj->num."<br>";
        }
    }
}

?>
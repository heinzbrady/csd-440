
<?php
/*
Name: Brady Heinz
Course: CSD-440
Assignment: Module 6.2
Date: 11/15/2026
Description: Creates a class that stores an integer
and checks if numbers are even, odd, or prime.
*/

class BradyMyInteger {

    private $number;

    // Constructor sets the integer
    public function __construct($number) {
        $this->number = (int)$number;
    }

    // Returns the stored integer
    public function getNumber() {
        return $this->number;
    }

    // Updates the stored integer
    public function setNumber($number) {
        $this->number = (int)$number;
    }

    // Checks if a number is even
    public function isEven($number) {
        return $number % 2 == 0;
    }

    // Checks if a number is odd
    public function isOdd($number) {
        return $number % 2 != 0;
    }

    // Checks if the stored number is prime
    public function isPrime() {
        if ($this->number < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($this->number); $i++) {
            if ($this->number % $i == 0) {
                return false;
            }
        }

        return true;
    }
}
?>

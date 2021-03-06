<?php

namespace Tirsope;

class Fibonacci
{
    public function fibonacci($number)
    {
        switch ($number) {
            case 0:
                return 0;
                break;

            case 1:
                return 1;
                break;

            default:
                return $this->computeFibonacciFor($number);
                break;
        }
    }

    /**
     * @param $number
     * @return int
     */
    public function computeFibonacciFor($number)
    {
        return $this->fibonacci($number - 1) + $this->fibonacci($number - 2);
    }

    /**
     * Computes the Fibonacci numbers up to a given number.
     * @param $number
     * @return array
     */
    public function fibonacciNumbersUpTo($number)
    {
        $fibonacci_numbers = [];

        for ($i = 0; $i <= $number; $i++) {
            $fibonacci_numbers[] = $this->fibonacci($i);
        }

        return $fibonacci_numbers;
    }
}

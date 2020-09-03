<?php


namespace Flix;

use RangeException;

class Fibonacci implements IFibonacci
{
    /**
     * Calculate and returns nth fibonacci number
     *
     * @param int $nthPosition
     * @return int
     */
    public function getNumber(int $nthPosition): int
    {
        // Taking absolute to handle negative nth position i.e. nthPosition less than zero
        $absOfNthPosition = abs($nthPosition);
        $nthFibonacci = 0;
        $nextFibonacci = 1;

        for ($counter=0; $counter<$absOfNthPosition; $counter++) {
            $tempNext = $nthFibonacci + $nextFibonacci;
            $nthFibonacci = $nextFibonacci;
            $nextFibonacci = $tempNext;

            // if number exceeds from maximum integer range then exception should be thrown
            if($nthFibonacci > PHP_INT_MAX) {
                throw new RangeException();
            }
        }

        // for negative number we should implement formula F(-n) = (-1)^{n+1} * F(n)
        if($nthPosition < 0) {
            $nthFibonacci = pow(-1, $absOfNthPosition+1) * $nthFibonacci;
        }

        return $nthFibonacci;
    }
}

<?php


namespace Flix;

use RangeException;

interface IFibonacci
{
    /**
     * @param int $nthPosition the index in the fibonacci series we want
     * @throws RangeException if maximum integer limit is reached
     * @return int nth fibonacci number in the series
     */
    public function getNumber(int $nthPosition): int;
}

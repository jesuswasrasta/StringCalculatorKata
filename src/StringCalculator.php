<?php

/**
 * Created by PhpStorm.
 * User: san
 * Date: 12/03/2019
 * Time: 10:54
 */

namespace StringCalculatorKata;

use Exception;

class StringCalculator
{

    /**
     * StringCalculator constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param string $numbersString
     *
     * @return int
     * @throws Exception
     */
    public function add(string $numbersString): int
    {
        if(empty($numbersString)) {
            return 0;
        }

        $values = explode(",",$numbersString);
        return array_sum($values);

    }
}

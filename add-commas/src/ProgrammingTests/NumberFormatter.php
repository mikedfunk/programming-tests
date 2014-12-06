<?php

namespace ProgrammingTests;

class NumberFormatter
{

    /**
     * addCommas
     *
     * @param int $numberWithoutCommas
     * @return string the number with commas
     */
    public function addCommas($numberWithoutCommas)
    {
        // reverse the string
        $reversed = strrev($numberWithoutCommas);

        // loop through a range and add a comma after every third character
        $out = '';
        for ($i = 1; $i <= strlen($numberWithoutCommas); $i++) {

            // get the position of the digit
            $digit = $reversed{$i - 1};

            // add that to the output
            $out .= $digit;

            // if it's divisible by 3, also add a comma
            if ($i % 3 === 0) {
                $out .= ',';
            }
        }

        // reverse back and return the string
        return strrev($out);
    }
}

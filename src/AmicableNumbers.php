<?php

class AmicableNumbers
{
    public static function sumProperDivisors($num)
    {
        if ($num < 2) {
            return 0;
        }
        
        $output = 1;
        
        for ($i = 2; $i < sqrt($num); $i++) {
            if ($num % $i == 0) {
                $output += ($num / $i) + $i;
            }
        }
        
        if (sqrt($num) == round(sqrt($num))) {
            $output += sqrt($num);
        }
        
        return $output;
    }

    public function sumAmicableNumbers($threshold)
    {
        $output = 0;
        
        for ($i = 1; $i < $threshold; $i++) {
            $tmp = self::sumProperDivisors($i);
            
            if ($tmp != $i && $tmp < $threshold) {
                if (self::sumProperDivisors($tmp) == $i) {
                    $output += $i;
                }
            }
        }
        
        return $output;
    }
}
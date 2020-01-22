<?php
function randomGenerator($num)
{
    $arrayNumbers = [];

    for (; count($arrayNumbers) < $num ; ) { 
        $number = rand(1,100);

        if (!in_array($number,$arrayNumbers)) {
            $arrayNumbers[] = $number;
        }
    }

    return $arrayNumbers;
}
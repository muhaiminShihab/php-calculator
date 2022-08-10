<?php

// Calculate
function calculate($inputOne, $inputTwo, $type)
{
    // Plus
    if ($type === 'plus') {
        return $inputOne + $inputTwo;
    }

    // Minus
    if ($type === 'minus') {
        return $inputOne - $inputTwo;
    }

    // Into
    if ($type === 'into') {
        return $inputOne * $inputTwo;
    }

    // Devide
    if ($type === 'devide') {
        return $inputOne / $inputTwo;
    }
}

?>
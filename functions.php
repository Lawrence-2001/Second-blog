<?php

// validation functions
function clear_data($data)
{
    return trim(stripcslashes(htmlspecialchars($data)));
}

function check_min_length(string $string, int $length): bool
{
    return strlen($string) >= $length;
}



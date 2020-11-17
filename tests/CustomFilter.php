<?php

use PHPUnit\Framework\TestCase;
use 5150studios\Sanitizer\Contracts\Filter;

class CustomFilter implements Filter
{
    public function apply($value, $options = [])
    {
        return $value . $value;
    }
}

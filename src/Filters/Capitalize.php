<?php

namespace 5150studios\Sanitizer\Filters;

use 5150studios\Sanitizer\Contracts\Filter;

class Capitalize implements Filter
{
    /**
     *  Capitalize the given string.
     *
     *  @param  string  $value
     *  @return string
     */
    public function apply($value, $options = [])
    {
        return is_string($value) ? mb_convert_case(mb_strtolower($value, 'UTF-8'),  MB_CASE_TITLE) : $value;
    }
}

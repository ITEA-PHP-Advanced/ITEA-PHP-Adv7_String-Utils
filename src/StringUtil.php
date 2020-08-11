<?php

namespace ITEA;

class StringUtil
{
    public static function toLowerCase($str)
    {
        return mb_strtolower($str);
    }

    public static function toUpperCase($str)
    {
        return mb_strtoupper($str);
    }
}

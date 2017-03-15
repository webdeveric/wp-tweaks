<?php

namespace webdeveric\WPTweaks;

function str_starts_with( $str, $word )
{
    return mb_substr($str, 0, mb_strlen($word)) === $word;
}

function stri_starts_with( $str, $word )
{
    return str_starts_with( strtolower( $str ), strtolower( $word ) );
}

function str_ends_with( $str, $word )
{
    return mb_substr($str, 0 - mb_strlen($word)) === $word;
}

function stri_ends_with( $str, $word )
{
   return str_ends_with( strtolower( $str ), strtolower( $word ) );
}

<?php

use Nhytros\BladeDirectives\Parser;
use Illuminate\Support\Str;

return [
    /*
    |---------------------------------------------------------------------
    | @fa, @fas, @far, @fal, @fab, @mdi, @glyph
    |---------------------------------------------------------------------
    */

    'fa' => function ($expression) {
        $expression = Parser::multipleArgs($expression);

        return '<i class="fa fa-'.Parser::stripQuotes($expression->get(0)).' '.Parser::stripQuotes($expression->get(1)).'"></i>';
    },

    'fad' => function ($expression) {
        $expression = Parser::multipleArgs($expression);

        return '<i class="fad fa-'.Parser::stripQuotes($expression->get(0)).' '.Parser::stripQuotes($expression->get(1)).'"></i>';
    },

    'fas' => function ($expression) {
        $expression = Parser::multipleArgs($expression);

        return '<i class="fas fa-'.Parser::stripQuotes($expression->get(0)).' '.Parser::stripQuotes($expression->get(1)).'"></i>';
    },

    'far' => function ($expression) {
        $expression = Parser::multipleArgs($expression);

        return '<i class="far fa-'.Parser::stripQuotes($expression->get(0)).' '.Parser::stripQuotes($expression->get(1)).'"></i>';
    },

    'fal' => function ($expression) {
        $expression = Parser::multipleArgs($expression);

        return '<i class="fal fa-'.Parser::stripQuotes($expression->get(0)).' '.Parser::stripQuotes($expression->get(1)).'"></i>';
    },

    'fab' => function ($expression) {
        $expression = Parser::multipleArgs($expression);

        return '<i class="fab fa-'.Parser::stripQuotes($expression->get(0)).' '.Parser::stripQuotes($expression->get(1)).'"></i>';
    },
];

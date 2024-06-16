<?php

$routes = [
    'auth/register' => 'AuthController@register',
    'auth/login' => 'AuthController@login',
    'slides/show' => 'SlideController@show',
];

// Code to parse the URL and match it to the appropriate route

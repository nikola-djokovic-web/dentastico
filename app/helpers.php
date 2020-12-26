<?php

function isActiveRoute($route, $output = " current-menu-item")
{
    if (Route::currentRouteName() == $route) return $output;
}


?>

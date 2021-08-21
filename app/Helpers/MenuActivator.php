<?php

// Active Menu Button

function MenuActive($segment, $match)
{

    if (request()->segment($match) == $segment) {

        return 'active';
    }
}

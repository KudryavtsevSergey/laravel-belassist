<?php

use Sun\BelAssist\BelAssist;
use Sun\BelAssist\Facade;

if (!function_exists('belAssist')) {
    function belAssist(): BelAssist
    {
        return app(Facade::FACADE);
    }
}

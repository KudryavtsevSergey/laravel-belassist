<?php

namespace Sun\BelAssist\Exceptions\Request;

use Illuminate\Contracts\Support\Responsable;
use Throwable;

interface ResponsableThrowable extends Responsable, Throwable
{
}

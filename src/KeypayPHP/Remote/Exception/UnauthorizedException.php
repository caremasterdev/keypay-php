<?php

namespace KeypayPHP\Remote\Exception;

use KeypayPHP\Remote\Exception;

class UnauthorizedException extends Exception
{
    protected $message = 'Invalid authorization credentials.';

    protected $code = 401;
}

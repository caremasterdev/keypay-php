<?php

namespace KeypayPHP\Remote\Exception;

use KeypayPHP\Remote\Response;
use KeypayPHP\Remote\Exception;

class UnauthorizedException extends Exception
{
    protected $message = 'Invalid authorization credentials.';

    protected $code = Response::STATUS_UNAUTHORISED;
}

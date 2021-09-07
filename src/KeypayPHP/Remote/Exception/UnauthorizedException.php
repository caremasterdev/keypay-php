<?php

namespace KeypayPHP\Remote\Exception;

use KeypayPHP\Remote\Exception;
use KeypayPHP\Remote\Response;

class UnauthorizedException extends Exception
{
    protected $message = 'Invalid authorization credentials.';

    protected $code = Response::STATUS_UNAUTHORISED;
}

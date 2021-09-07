<?php

namespace KeypayPHP\Remote;

class Response
{
    private Request $request;

    const STATUS_UNAUTHORISED = 401;

    private array $headers;

    private int $status;

    private $response_body;

    private $oauth_response;

    private $elements;

    private $element_errors;

    private $element_warnings;

    private $root_error;

    public function __construct(Request $request, $response_body, $status, $headers)
    {
        $this->request = $request;
        $this->response_body = $response_body;
        $this->status = $status;
        $this->headers = $headers;
    }

    public function parse()
    {
        $this->parseBody();
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getResponseBody()
    {
        return $this->response_body;
    }

    public function getElements()
    {
        return $this->elements;
    }

    public function getErrorsForElement($element_id)
    {
        if (isset($this->element_errors[$element_id])) {
            return $this->element_errors[$element_id];
        }
    }

    public function getElementErrors()
    {
        return $this->element_errors;
    }

    public function getElementWarnings()
    {
        return $this->element_warnings;
    }

    public function getRootError()
    {
        return $this->root_error;
    }

    public function getOAuthResponse()
    {
        return $this->oauth_response;
    }

    public function parseBody()
    {
        $this->elements = [];
        $this->element_errors = [];
        $this->element_warnings = [];
        $this->root_error = [];

        if (! isset($this->headers[Request::HEADER_CONTENT_TYPE])) {
            //Nothing to parse
            return;
        }

        //Iterate in priority order
        foreach ($this->headers[Request::HEADER_CONTENT_TYPE] as $ct) {
            list($content_type) = explode(';', $ct);

            switch ($content_type) {
                case Request::CONTENT_TYPE_XML:
                    $this->parseXML();

                    break;

                case Request::CONTENT_TYPE_JSON:
                    $this->parseJSON();

                    break;

                case Request::CONTENT_TYPE_HTML:
                    $this->parseHTML();

                    break;

                default:
                    //Try the next content type
                    continue 2;

            }

            foreach ($this->elements as $index => $element) {
                $this->findElementErrors($element, $index);
            }

            //A matching content-type was found, break the foreach
            break;
        }
    }

    public function parseJSON()
    {
        $json = json_decode($this->response_body, true);

        foreach ($json as $child_index => $root_child) {
            switch ($child_index) {
                case 'ErrorNumber':
                    $this->root_error['code'] = $root_child;

                    break;
                case 'Type':
                    $this->root_error['type'] = $root_child;

                    break;
                case 'Message':
                    $this->root_error['message'] = $root_child;

                    break;
                case 'Payslip':
                case 'PayItems':
                    // some xero endpoints are 1D so we can parse them straight away
                    $this->elements[] = $root_child;

                    break;

                default:
                    //Happy to make the assumption that there will only be one
                    //root node with > than 2D children.
                    if (is_array($root_child)) {
                        foreach ($root_child as $element) {
                            $this->elements[] = $element;
                        }
                    }
            }
        }
    }

    //Xero sends text/html when it's an oauth response for some reason.
    public function parseHTML()
    {
        parse_str($this->response_body, $this->oauth_response);
    }
}

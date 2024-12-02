<?php

namespace IvkeyMinds\InvoiceNinjaClient;

class ApiWrapper
{
    private $api;
    /**
     * @var string
     */
    public $xApiToken;
    /**
     * @var string
     */
    public $xRequestedWith;

    public function __construct($api, $x_api_token, $x_requested_with)
    {
        $this->api = $api;
        $this->xApiToken = $x_api_token;
        $this->xRequestedWith = $x_requested_with;
    }

    public function setXApiToken(string $xApiToken)
    {
        $this->xApiToken = $xApiToken;
        return $this;
    }

    public function setXRequestedWith(string $xRequestedWith)
    {
        $this->xRequestedWith = $xRequestedWith;
        return $this;
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this->api, $name)) {
            $arguments = array_merge([
                'x_api_token' => $this->xApiToken,
                'x_requested_with' => $this->xRequestedWith
            ], $arguments);

            return call_user_func_array([$this->api, $name], $arguments);
        }

        throw new \BadMethodCallException("Method {$name} not found in API " . get_class($this->api));
    }
}
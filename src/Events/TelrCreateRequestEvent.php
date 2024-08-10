<?php

namespace TelrPaymentGateway\Events;

use TelrPaymentGateway\CreateTelrRequest;

class TelrCreateRequestEvent
{
    /**
     * @var CreateTelrRequest
     */
    public $telrRequest;

    /**
     * @var \stdClass
     */
    public $response;

    /**
     * CreateRequestEvent constructor.
     *
     * @param \TelrPaymentGateway\CreateTelrRequest $request
     * @param \stdClass $response
     */
    public function __construct(CreateTelrRequest $request, \stdClass $response)
    {
        $this->telrRequest = $request;
        $this->response = $response;
    }
}

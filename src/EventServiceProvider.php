<?php

namespace TelrPaymentGateway;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use TelrPaymentGateway\Events\TelrCreateRequestEvent;
use TelrPaymentGateway\Events\TelrRecieveTransactionResponseEvent;
use TelrPaymentGateway\Listeners\CreateTransactionListener;
use TelrPaymentGateway\Listeners\SaveTransactionResponseListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        TelrCreateRequestEvent::class => [
            CreateTransactionListener::class,
        ],
        // Register listener after receive response from telr
        TelrRecieveTransactionResponseEvent::class => [
            SaveTransactionResponseListener::class
        ],
    ];
}
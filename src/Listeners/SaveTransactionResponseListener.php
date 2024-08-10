<?php

namespace TelrPaymentGateway\Listeners;

use TelrPaymentGateway\Events\TelrSuccessTransactionEvent;
use TelrPaymentGateway\Events\TelrFailedTransactionEvent;

class SaveTransactionResponseListener
{
    /**
     * @param TelrSuccessTransactionEvent|TelrFailedTransactionEvent $event
     */
    public function handle($event)
    {
        $event->transaction->fill(['response' => $event->response, 'status' => 1])->save();
    }
}


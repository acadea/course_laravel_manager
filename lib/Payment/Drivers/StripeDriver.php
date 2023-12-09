<?php

namespace Payment\Drivers;

class StripeDriver implements PaymentDriverContract
{
    public function pay($amount)
    {
        dump('stripe pay');
        // TODO: Implement pay() method.
    }

    public function refund($amount)
    {
        // TODO: Implement refund() method.
    }

}
<?php

namespace Payment\Drivers;

class PaypalDriver implements PaymentDriverContract
{
    public function pay($amount)
    {
        dump('paypal pay');
        // TODO: Implement pay() method.
    }

    public function refund($amount)
    {
        // TODO: Implement refund() method.
    }

}
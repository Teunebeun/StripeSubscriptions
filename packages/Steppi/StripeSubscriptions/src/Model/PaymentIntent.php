<?php


namespace Steppi\StripeSubscriptions\Model;

use Steppi\StripeSubscriptions\Interfaces\IModel;
use Stripe\PaymentIntent as StripePaymentIntent;

class PaymentIntent extends StripePaymentIntent implements IModel
{
    public function CreateFromObject()
    {
        // TODO: Implement CreateFromObject() method.
    }
}

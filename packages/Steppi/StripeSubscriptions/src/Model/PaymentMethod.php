<?php


namespace Steppi\StripeSubscriptions\Model;


use Steppi\StripeSubscriptions\Interfaces\IModel;
use Stripe\PaymentMethod as StripePaymentMethod;

class PaymentMethod extends StripePaymentMethod implements IModel
{
    public function CreateFromObject()
    {
        // TODO: Implement CreateFromObject() method.
    }


    public function __construct($params)
    {
        self::create($params);
    }


}

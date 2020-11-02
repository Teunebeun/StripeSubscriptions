<?php


namespace Steppi\StripeSubscriptions\Model;


use Steppi\StripeSubscriptions\Interfaces\IModel;

class Customer extends \Stripe\Customer implements IModel
{
    public function CreateFromObject()
    {
        // TODO: Implement CreateFromObject() method.
    }

}

<?php


namespace Steppi\StripeSubscriptions\Model;

use Steppi\StripeSubscriptions\Interfaces\IModel;

class Subscription extends \Stripe\Subscription implements IModel
{
    public function CreateFromObject()
    {
        // TODO: Implement CreateFromObject() method.
    }

}

<?php


namespace Steppi\StripeSubscriptions\Model;


use Steppi\StripeSubscriptions\Interfaces\IModel;
use Steppi\StripeSubscriptions\Traits\ToPDF;

class Invoice extends \Stripe\Invoice implements IModel
{
    public function CreateFromObject()
    {
        // TODO: Implement CreateFromObject() method.
    }

    use ToPDF;

}

<?php


namespace Steppi\StripeSubscriptions\Abstracts;

use Stripe\Stripe;

/**
 * Used for Stripes API connection
 */
abstract class Connection extends Stripe
{
    public static function connect(){
        self::setApiKey(env('STRIPE_KEY'));
    }

}

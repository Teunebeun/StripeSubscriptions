<?php


namespace Steppi\StripeSubscriptions\Config;


class StripeConfig
{
    private static $webhook_success = "https://my.steppi.nl/payment";
    private static $webhook_cancel = "https://my.steppi.nl/cancel";

    public static function webhooks(){
        return [
            'succes_url' => self::$webhook_success,
            'cancel_url' => self::$webhook_cancel
        ];
    }
}

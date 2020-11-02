<?php


namespace Steppi\StripeSubscriptions\Builder;


use Steppi\StripeSubscriptions\Abstracts\Builder;
use Steppi\StripeSubscriptions\Model\Subscription;

class SubscriptionBuilder extends Builder
{
    private Subscription $subscription;

    public function build($params){

    }

    public function get(){
        return $this->subscription;
    }

    public function buildFromObject($object){
    }

}

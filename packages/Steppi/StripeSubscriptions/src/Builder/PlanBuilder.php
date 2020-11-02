<?php


namespace Steppi\StripeSubscriptions\Builder;


use Steppi\StripeSubscriptions\Abstracts\Builder;
use Steppi\StripeSubscriptions\Model\Customer;
use Steppi\StripeSubscriptions\Model\Plan;

class PlanBuilder extends Builder
{
    private Plan $plan;

    public function build($params){

    }

    public function get(){
        return $this->plan;
    }

    public function buildFromObject($object){
    }

}

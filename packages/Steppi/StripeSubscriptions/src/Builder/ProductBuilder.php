<?php


namespace Steppi\StripeSubscriptions\Builder;


use Steppi\StripeSubscriptions\Abstracts\Builder;
use Steppi\StripeSubscriptions\Model\Customer;
use Steppi\StripeSubscriptions\Model\Product;

class ProductBuilder extends Builder
{
    private Product $product;

    public function build($params){

    }

    public function get(){
        return $this->product;
    }

    public function buildFromObject($object){
    }

}

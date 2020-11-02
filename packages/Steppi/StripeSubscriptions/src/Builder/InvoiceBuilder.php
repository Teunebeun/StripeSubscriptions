<?php


namespace Steppi\StripeSubscriptions\Builder;

use Steppi\StripeSubscriptions\Abstracts\Builder;
use Steppi\StripeSubscriptions\Model\Customer;
use Steppi\StripeSubscriptions\Model\Invoice;

class InvoiceBuilder extends Builder
{
    private Invoice $invoice;

    public function build($params){

    }

    public function get(){
        return $this->invoice;
    }

    public function buildFromObject($object){
    }
}

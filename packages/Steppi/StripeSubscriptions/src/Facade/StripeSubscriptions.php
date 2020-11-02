<?php


namespace Steppi\StripeSubscriptions\Facade;

use Steppi\StripeSubscriptions\Builder\CustomerBuilder;
use Steppi\StripeSubscriptions\Builder\InvoiceBuilder;
use Steppi\StripeSubscriptions\Builder\PaymentMethodBuilder;
use Steppi\StripeSubscriptions\Builder\PaymentIntentBuilder;
use Steppi\StripeSubscriptions\Builder\PlanBuilder;
use Steppi\StripeSubscriptions\Builder\ProductBuilder;
use Steppi\StripeSubscriptions\Builder\SubscriptionBuilder;

/**
 * Class StripeSubscriptions
 *
 * Meant as an original facade design pattern
 */
class StripeSubscriptions
{
    private CustomerBuilder $customer;
    private PaymentMethodBuilder $paymentmethod;
    private PaymentIntentBuilder $paymentintent;
    private SubscriptionBuilder $subscription;

    // <editor-fold desc="Global">
    public function __construct()
    {
        $this->customer = new CustomerBuilder();
        $this->paymentmethod = new PaymentMethodBuilder();
        $this->paymentintent = new PaymentIntentBuilder();
        $this->subscription = new SubscriptionBuilder();
    }


    public function createFirstPayment($customer, $method, $payment){
        $this->customer->build($customer);
        $cust = $this->customer->get();

        $this->paymentmethod->build($method);
        $meth = $this->paymentmethod->get();

        $pay = $this->paymentintent->firstPayment($cust, $meth, $payment);
        return $pay;
    }

    // </editor-fold>

    // <editor-fold desc="Customer">


    // </editor-fold>

    // <editor-fold desc="Invoice">


    // </editor-fold>

    // <editor-fold desc="PaymentMethod">


    // </editor-fold>

    // <editor-fold desc="Plan">

    // </editor-fold>

    // <editor-fold desc="Product">


    // </editor-fold>

    // <editor-fold desc="Subscription">


    // </editor-fold>

}

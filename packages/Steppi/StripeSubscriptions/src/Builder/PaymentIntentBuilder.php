<?php


namespace Steppi\StripeSubscriptions\Builder;


use Steppi\StripeSubscriptions\Abstracts\Builder;
use Steppi\StripeSubscriptions\Model\PaymentIntent;
use Carbon\Carbon;

class PaymentIntentBuilder extends Builder
{
    private $paymentintent;

    public function build($params){
        dd($params);
    }

    public function firstPayment($customer, $method, $payment){
        $this->paymentintent = PaymentIntent::create([
           'amount' => $payment['amount'],
           'currency' => $payment['currency'],
            'customer' => $customer,
            'description' => "First payment",
            'payment_method' => $method,
            'payment_method_types' => [
                $method['type']
            ],
            'metadata' => [
                'created_at' => Carbon::now(),
                'payment_id' => $payment['id']
            ],
        ]);
        return $this->paymentintent;
    }

    public function get(){
        return $this->paymentintent;
    }

    public function buildFromObject($object){
    }

    public function buildWithMethod($method, $order){

    }

}

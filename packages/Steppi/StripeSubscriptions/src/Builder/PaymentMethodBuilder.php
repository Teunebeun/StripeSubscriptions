<?php


namespace Steppi\StripeSubscriptions\Builder;

use Steppi\StripeSubscriptions\Abstracts\Builder;
use Steppi\StripeSubscriptions\Helper\StripeKey;
use Steppi\StripeSubscriptions\Model\Customer;
use Steppi\StripeSubscriptions\Model\PaymentMethod;
use Stripe\Stripe;

class PaymentMethodBuilder extends Builder
{
    private $paymethod;

    public function __construct()
    {
        parent::connect();
    }
    public function card(){
        $method = [
            'type' => 'card',
            'card' => [
                'token' => "tok_visa",
            ],
        ];
        $this->paymethod = PaymentMethod::create($method);
        dd($this->paymethod);
    }
    public function build($params){
        $this->paymethod = PaymentMethod::create([
            'type' => $params['type'],

        ]);
        /*$method = [
            'type' => 'bancontact',
            'billing_details' => [
                "name" => 'Teun Salters'
            ]

        ];
        $this->paymethod = PaymentMethod::create($method);*/

    }

    public function get(){
        return $this->paymethod;
    }
    public function buildFromObject($object){
    }

}

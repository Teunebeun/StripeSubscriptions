<?php


namespace Steppi\StripeSubscriptions\Builder;


use Steppi\StripeSubscriptions\Abstracts\Builder;
use Steppi\StripeSubscriptions\Model\Customer;
use Carbon\Carbon;

class CustomerBuilder extends Builder
{
    private $customer;

    public function __construct()
    {
        parent::connect();
    }

    public function build($params){
        $this->customer = Customer::Create([
           'name' => $params['first_name']. ' ' . $params['last_name'],
            'metadata' => [
                'creation_date' => Carbon::now(),
                'customer_id' => $params['id']
            ]
        ]);
    }

    public function buildFromObject($object){
        $this->customer = Customer::create([
            'email' => $object['email'],
            'name' => $object['first_name'].  ' '  .$object['last_name'],
            'description' => 'Test customer',
        ]);
    }

    public function get(){
        return $this->customer;
    }

}

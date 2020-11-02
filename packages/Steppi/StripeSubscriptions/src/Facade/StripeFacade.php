<?php


namespace Steppi\StripeSubscriptions\Facade;

use Illuminate\Support\Facades\Facade;

class StripeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'StripeSubscriptions';
    }

    public static function __callStatic($method, $args)
    {
        if(!method_exists(app('stripe'), $method)){
            throw new \Exception("Function does not exists");
        }else{
            if(count($args) > 1){
                return call_user_func_array(array(app('stripe'), $method), $args);
            }else{
                return app('stripe')->$method($args);
            }
        }
    }
}

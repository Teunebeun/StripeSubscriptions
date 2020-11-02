<?php


namespace Steppi\StripeSubscriptions\Abstracts;


abstract class Builder extends Connection
{
    /**
     * Used to declare objects and methods for every object builder
     */

    public abstract function build($params);

    public abstract function buildFromObject($object);

    public abstract function get();


}

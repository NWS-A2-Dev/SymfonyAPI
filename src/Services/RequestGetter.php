<?php


namespace App\Services;

use Symfony\Component\HttpFoundation\RequestStack;

class RequestGetter
{
    public $Request;
    public $i;

    public function __construct(RequestStack $r, $p)
    {
        var_dump($p);
        $this->Request = $r->getCurrentRequest();
    }

    public function Bork()
    {
        var_dump($this->Request);
        die();
    }

    public function Get(string $key)
    {
        return ($this->Request->get($key));
    }
}
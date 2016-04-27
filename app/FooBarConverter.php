<?php

namespace App;

class FooBarConverter
{
    public function convert($event)
    {
        return 'foo' . $event . 'bar';
    }
}

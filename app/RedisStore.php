<?php

namespace App;

class RedisStore
{
    public function store($event)
    {
        dd('THIS EVENT HAS GONE INTO REDIS : ' . $event);
    }
}
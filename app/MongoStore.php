<?php

namespace App;

class MongoStore
{
    public function store($event)
    {
        dd('THIS EVENT HAS GONE INTO MONGO : ' . $event);
    }
}
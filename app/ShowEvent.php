<?php

namespace App;

class ShowEvent
{
    private $event;
    private $converter;
    private $store;

    public function __construct($converter, $store)
    {
        $this->converter = $converter;
        $this->store = $store;
    }

    public function load($event)
    {
        $this->event = $event;
    }

    public function convert()
    {
        $this->event = $this->converter->convert($this->event);
    }

    public function insert()
    {
        $this->store->store('A Show Event : ' . $this->event);
    }
}
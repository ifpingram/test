<?php

namespace App;

class EnquiryEvent
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
        $this->store->store('An Enquiry Event : ' . $this->event);
    }
}
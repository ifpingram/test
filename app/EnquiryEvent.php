<?php

namespace App;

class EnquiryEvent
{
    private $event;
    private $converter;

    public function __construct($event_converter)
    {
        $this->converter = $event_converter;
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
        dd('THIS ENQUIRY EVENT GOES INTO MONGO : ' . $this->event);
    }
}
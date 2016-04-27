<?php

namespace App;

class SearchEvent
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
        dd('THIS SEARCH EVENT GOES INTO REDIS : ' . $this->event);
    }
}
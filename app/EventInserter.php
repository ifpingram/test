<?php

namespace App;

use App\SearchEvent;
use App\ShowEvent;
use App\EnquiryEvent;

class EventInserter
{
    private $event;

    public function __construct($event_type, $event)
    {
        $this->event = app($event_type);
        $this->event->load($event);
        $this->event->convert();
    }

    public function insert()
    {
        $this->event->insert();
    }
}

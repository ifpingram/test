<?php

namespace App\Http\Controllers;

use App\EnquiryEvent;
use App\SearchEvent;
use App\ShowEvent;
use App\EventInserter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InsertController extends Controller
{
    public function search($id)
    {
        $event_inserter = new EventInserter(SearchEvent::class, $id);
        $event_inserter->insert();
    }

    public function show($id)
    {
        $event_inserter = new EventInserter(ShowEvent::class, $id);
        $event_inserter->insert();
    }

    public function enquiry($id)
    {
        $event_inserter = new EventInserter(EnquiryEvent::class, $id);
        $event_inserter->insert();
    }
}

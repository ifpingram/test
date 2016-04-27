<?php

namespace App;

class BarFooConverter
{
    public function convert($event)
    {
        return 'bar' . $event . 'foo';
    }
}

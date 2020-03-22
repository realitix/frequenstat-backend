<?php

namespace Tracker\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TrackerUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
